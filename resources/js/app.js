import './bootstrap';

// Smooth anchor scrolling for in-page nav
document.addEventListener('click', (e) => {
  const target = e.target.closest('a[href^="#"]');
  if (!target) return;

  const id = target.getAttribute('href').slice(1);
  if (!id) return;

  const el = document.getElementById(id);
  if (!el) return;

  e.preventDefault();
  // If link is intended to open modal, skip smooth scroll
  if (target.hasAttribute('data-open-franchise-modal')) return;
  el.scrollIntoView({ behavior: 'smooth', block: 'start' });
});

// On scroll, toggle Tailwind utilities for a sticky, blurred header
const header = document.querySelector('header');
if (header) {
  const toggle = () => {
    const add = window.scrollY > 10;
    header.classList.toggle('sticky', add);
    header.classList.toggle('top-0', add);
    header.classList.toggle('z-40', add);
    header.classList.toggle('backdrop-blur-md', add);
    header.classList.toggle('border-b', add);
    header.classList.toggle('border-white/20', add);
  };
  toggle();
  window.addEventListener('scroll', toggle, { passive: true });
}

// Mobile menu toggle (hamburger)
(() => {
  // Franchise modal open/close
  const modal = document.getElementById('franchise-modal');
  if (modal) {
    document.addEventListener('click', (e) => {
      const openBtn = e.target.closest('[data-open-franchise-modal]');
      const closeBackdrop = e.target.closest('[data-close-modal]');
      const closeBtn = e.target.closest('button[data-close-modal]');
      if (openBtn) {
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
      } else if (closeBackdrop || closeBtn) {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      }
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      }
    });
  }
  const toggleBtn = document.getElementById('mobile-menu-toggle');
  const menu = document.getElementById('mobile-menu');
  const iconMenu = document.getElementById('icon-menu');
  const iconClose = document.getElementById('icon-close');
  if (!toggleBtn || !menu) return;

  const setOpen = (open) => {
    menu.classList.toggle('hidden', !open);
    toggleBtn.setAttribute('aria-expanded', String(open));
    if (iconMenu && iconClose) {
      iconMenu.classList.toggle('hidden', open);
      iconClose.classList.toggle('hidden', !open);
    }
    document.body.classList.toggle('overflow-hidden', open);
  };

  let isOpen = false;
  toggleBtn.addEventListener('click', () => {
    isOpen = !isOpen;
    setOpen(isOpen);
  });

  // Close on link click
  menu.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (!link) return;
    isOpen = false;
    setOpen(false);
  });

  // Close on resize to md and up
  const mq = window.matchMedia('(min-width: 768px)');
  mq.addEventListener?.('change', () => {
    if (mq.matches) {
      isOpen = false;
      setOpen(false);
    }
  });
})();

// Hero background slideshow (fade crossfade)
(() => {
  const container = document.querySelector('[data-hero-slides]');
  if (!container) return;
  let slides = [];
  let positions = [];
  try {
    slides = JSON.parse(container.getAttribute('data-hero-slides') || '[]');
  } catch (_e) {
    slides = [];
  }
  const rawPos = container.getAttribute('data-hero-position');
  if (rawPos) {
    try {
      const parsed = JSON.parse(rawPos);
      positions = Array.isArray(parsed) ? parsed : [String(parsed)];
    } catch (_err) {
      positions = [rawPos];
    }
  }
  if (!slides.length) return;

  const getPosition = (idx) => computedPositions.get(idx) || positions[idx] || positions[0] || 'center 35%';

  // Experimental: auto-center faces if the browser supports Shape Detection API
  const computedPositions = new Map();
  const faceDetector = 'FaceDetector' in window ? new window.FaceDetector({ fastMode: true, maxDetectedFaces: 1 }) : null;
  const tryDetectFace = (idx, onReady) => {
    if (!faceDetector) return;
    // Avoid rework
    if (computedPositions.has(idx)) return;
    const probe = new Image();
    probe.decoding = 'async';
    probe.loading = 'eager';
    probe.src = slides[idx];
    probe.onload = async () => {
      try {
        const faces = await faceDetector.detect(probe);
        if (faces && faces.length) {
          const box = faces[0].boundingBox || faces[0];
          const cx = ((box.x + box.width / 2) / (probe.naturalWidth || probe.width)) * 100;
          const cy = ((box.y + box.height / 2) / (probe.naturalHeight || probe.height)) * 100;
          const pos = `${cx}% ${cy}%`;
          computedPositions.set(idx, pos);
          onReady?.(pos);
        }
      } catch (_) {}
    };
  };

  const makeLayer = (src, z, idx) => {
    const img = document.createElement('img');
    img.src = src;
    img.alt = 'Hero background';
    img.className = 'w-full h-full object-cover absolute inset-0 transition-opacity duration-1000 ease-in-out';
    img.style.opacity = '0';
    img.style.zIndex = String(z);
    img.style.objectPosition = getPosition(idx);
    return img;
  };

  const layerA = makeLayer(slides[0], 0, 0);
  const layerB = makeLayer(slides[1 % slides.length] || slides[0], 0, 1);
  container.appendChild(layerA);
  container.appendChild(layerB);

  let index = 0;
  let showA = true;

  const show = (el) => { el.style.opacity = '1'; };
  const hide = (el) => { el.style.opacity = '0'; };

  // Start: attempt face centering for the first two
  tryDetectFace(0, (pos) => { layerA.style.objectPosition = pos; });
  tryDetectFace(1, (pos) => { layerB.style.objectPosition = pos; });
  show(layerA);

  const advance = () => {
    index = (index + 1) % slides.length;
    const nextSrc = slides[index];
    if (showA) {
      layerB.src = nextSrc;
      layerB.style.objectPosition = getPosition(index);
      tryDetectFace(index, (pos) => { layerB.style.objectPosition = pos; });
      show(layerB); hide(layerA);
    } else {
      layerA.src = nextSrc;
      layerA.style.objectPosition = getPosition(index);
      tryDetectFace(index, (pos) => { layerA.style.objectPosition = pos; });
      show(layerA); hide(layerB);
    }
    showA = !showA;
  };

  setInterval(advance, 5000);
})();

// Google Maps Branch Locator
(async () => {
  const mapContainer = document.getElementById('branch-map');
  if (!mapContainer) return;

  const apiKey = document.querySelector('meta[name="google-maps-api-key"]')?.getAttribute('content') || '';
  if (!apiKey) {
    mapContainer.innerHTML = '<div class="p-4 text-sm">Set GOOGLE_MAPS_API_KEY in your environment to enable the map.</div>';
    return;
  }

  // Load Google Maps JS API with Places library
  const loadMaps = () => new Promise((resolve, reject) => {
    if (window.google && window.google.maps) return resolve();
    window.__initMaps = () => resolve();
    const s = document.createElement('script');
    s.src = `https://maps.googleapis.com/maps/api/js?key=${encodeURIComponent(apiKey)}&libraries=places&v=weekly&callback=__initMaps`;
    s.async = true;
    s.onerror = reject;
    document.head.appendChild(s);
  });

  try {
    await loadMaps();
  } catch (err) {
    mapContainer.innerHTML = '<div class="p-4 text-sm">Failed to load Google Maps. Please check your API key.</div>';
    return;
  }

  /**
   * Read branches from inline JSON. Each item can be either:
   * { name, query, phone }  // query will be searched via Places
   * or { name, lat, lng, address, phone }
   */
  let branches = [];
  try {
    const raw = document.getElementById('branch-data')?.textContent || '[]';
    branches = JSON.parse(raw);
  } catch (_) {
    branches = [];
  }

  // Default view centered around Cebu where most branches are located
  const initialCenter = { lat: 10.3157, lng: 123.8854 };
  const map = new google.maps.Map(mapContainer, {
    center: initialCenter,
    zoom: 11,
    mapTypeControl: false,
    streetViewControl: false,
    fullscreenControl: true,
  });

  const places = new google.maps.places.PlacesService(map);
  const infoWindow = new google.maps.InfoWindow();
  const bounds = new google.maps.LatLngBounds();
  const markers = [];
  const knownPlaceIds = new Set();

  const listEl = document.getElementById('branch-list');
  const searchInput = document.getElementById('branch-search');
  const searchBtn = document.getElementById('branch-search-btn');

  function buildMapsUrlView(q) {
    return `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(q)}`;
  }
  function buildMapsUrlDirections(dest) {
    // dest can be "lat,lng" or text query
    return `https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(dest)}`;
  }

  function createListItem(branch, marker) {
    const li = document.createElement('li');
    li.className = 'border border-[#e7efe8] rounded-lg p-3';
    li.innerHTML = `
      <div class="flex items-start justify-between gap-3">
        <div>
          <div class="font-semibold text-[#2d3d2a]">${branch.name || branch.address || branch.query || 'Branch'}</div>
          ${branch.address ? `<div class="text-sm text-[#6b856f]">${branch.address}</div>` : ''}
          ${branch.phone ? `<div class="text-sm text-[#6b856f]">${branch.phone}</div>` : ''}
        </div>
        <div class="shrink-0 flex gap-2">
          <a class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 border border-[#cfe9d2]" target="_blank" rel="noopener" href="${buildMapsUrlView(branch.query || branch.address || `${branch.lat},${branch.lng}`)}">View on Map</a>
          <a class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 border border-[#cfe9d2]" target="_blank" rel="noopener" href="${buildMapsUrlDirections(branch.query || branch.address || `${branch.lat},${branch.lng}`)}">Get Directions</a>
        </div>
      </div>`;
    li.addEventListener('click', () => {
      google.maps.event.trigger(marker, 'click');
    });
    listEl?.appendChild(li);
    return li;
  }

  async function resolveBranchLocation(branch) {
    // If coordinates are provided, return immediately
    if (typeof branch.lat === 'number' && typeof branch.lng === 'number') {
      return {
        location: new google.maps.LatLng(branch.lat, branch.lng),
        address: branch.address || '',
        name: branch.name || '',
      };
    }
    const query = branch.query || branch.address;
    if (!query) return null;
    return new Promise((resolve) => {
      places.textSearch({ query, region: 'PH' }, (results) => {
        const r = results && results[0];
        if (!r) return resolve(null);
        resolve({
          location: r.geometry?.location,
          address: r.formatted_address || branch.address || '',
          name: branch.name || r.name || query,
          placeId: r.place_id,
        });
      });
    });
  }

  for (const branch of branches) {
    // eslint-disable-next-line no-await-in-loop
    const res = await resolveBranchLocation(branch);
    if (!res || !res.location) continue;
    const marker = new google.maps.Marker({
      map,
      position: res.location,
      title: res.name,
      icon: {
        url: '/images/logo.v2.png',
        scaledSize: new google.maps.Size(28, 28),
      },
    });
    markers.push({ marker, data: { ...branch, address: res.address, name: res.name } });
    bounds.extend(res.location);

    marker.addListener('click', () => {
      const q = branch.query || res.address || `${res.location.lat()},${res.location.lng()}`;
      const html = `
        <div class="min-w-[220px]">
          <div class="font-semibold mb-1">${res.name}</div>
          ${res.address ? `<div class="text-sm text-[#6b856f] mb-2">${res.address}</div>` : ''}
          <div class="flex gap-2">
            <a class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 border border-[#cfe9d2]" target="_blank" rel="noopener" href="${buildMapsUrlView(q)}">View on Map</a>
            <a class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 border border-[#cfe9d2]" target="_blank" rel="noopener" href="${buildMapsUrlDirections(q)}">Get Directions</a>
          </div>
        </div>`;
      infoWindow.setContent(html);
      infoWindow.open({ map, anchor: marker });
      map.panTo(res.location);
      map.setZoom(Math.max(map.getZoom(), 14));
    });

    createListItem({ ...branch, address: res.address, name: res.name, lat: res.location.lat(), lng: res.location.lng() }, marker);
  }

  if (!bounds.isEmpty()) {
    map.fitBounds(bounds);
  }

  // Auto-discover additional branches via Google Places within Cebu bounds
  async function searchBigasanHubs() {
    const cebuBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(9.9, 123.3),
      new google.maps.LatLng(11.0, 124.1),
    );
    const request = { query: 'Bigasan Hub', bounds: cebuBounds }; // use bounds to bias results
    await new Promise((resolve) => {
      places.textSearch(request, (results, status, pagination) => {
        if (status !== google.maps.places.PlacesServiceStatus.OK || !results) return resolve();
        for (const result of results) {
          // Skip if not obviously our brand
          const name = (result.name || '').toLowerCase();
          if (!name.includes('bigasan')) continue;
          if (result.place_id && knownPlaceIds.has(result.place_id)) continue;
          if (result.place_id) knownPlaceIds.add(result.place_id);

          const position = result.geometry?.location;
          if (!position) continue;

          const marker = new google.maps.Marker({
            map,
            position,
            title: result.name,
            icon: {
              url: '/images/logo.v2.png',
              scaledSize: new google.maps.Size(28, 28),
            },
          });

          markers.push({ marker, data: { name: result.name, address: result.formatted_address || '', lat: position.lat(), lng: position.lng() } });
          bounds.extend(position);

          marker.addListener('click', () => {
            const q = result.formatted_address || result.name;
            const html = `
              <div class="min-w-[220px]">
                <div class="font-semibold mb-1">${result.name}</div>
                ${result.formatted_address ? `<div class=\"text-sm text-[#6b856f] mb-2\">${result.formatted_address}</div>` : ''}
                <div class="flex gap-2">
                  <a class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 border border-[#cfe9d2]" target="_blank" rel="noopener" href="${buildMapsUrlView(q)}">View on Map</a>
                  <a class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 border border-[#cfe9d2]" target="_blank" rel="noopener" href="${buildMapsUrlDirections(q)}">Get Directions</a>
                </div>
              </div>`;
            infoWindow.setContent(html);
            infoWindow.open({ map, anchor: marker });
            map.panTo(position);
            map.setZoom(Math.max(map.getZoom(), 14));
          });

          createListItem({ name: result.name, address: result.formatted_address || '', lat: position.lat(), lng: position.lng() }, marker);
        }
        if (pagination && pagination.hasNextPage) {
          // Places API requires a short delay before calling nextPage
          setTimeout(() => pagination.nextPage(), 1000);
        } else {
          resolve();
        }
      });
    });

    if (!bounds.isEmpty()) {
      map.fitBounds(bounds);
    }
  }

  // Kick off auto-discovery
  searchBigasanHubs();

  function applyFilter(term) {
    const lower = term.trim().toLowerCase();
    const items = listEl?.querySelectorAll('li') || [];
    let firstVisibleMarker = null;
    markers.forEach((entry, idx) => {
      const text = items[idx]?.textContent?.toLowerCase() || '';
      const visible = !lower || text.includes(lower);
      entry.marker.setVisible(visible);
      if (items[idx]) items[idx].style.display = visible ? '' : 'none';
      if (visible && !firstVisibleMarker) firstVisibleMarker = entry.marker;
    });
    if (firstVisibleMarker) {
      const pos = firstVisibleMarker.getPosition();
      if (pos) map.panTo(pos);
    }
  }

  searchBtn?.addEventListener('click', () => applyFilter(searchInput?.value || ''));
  searchInput?.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      e.preventDefault();
      applyFilter(searchInput.value);
    }
  });
})();
