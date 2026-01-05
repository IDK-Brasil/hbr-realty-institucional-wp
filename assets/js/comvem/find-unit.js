document.addEventListener("DOMContentLoaded", () => {
  if (typeof UNITS_DATA === "undefined") return;

  const stateSelect = document.getElementById("state-select");
  const citySelect = document.getElementById("city-select");
  const searchBtn = document.getElementById("search-unit");
  const mapWrapper = document.getElementById("map-wrapper");
  const mapIframe = document.getElementById("map-iframe");

  // normaliza valor (string ou array)
  const normalize = (value) => {
    if (Array.isArray(value)) return value[0];
    return value || "";
  };

  // estados únicos
  const states = [
    ...new Set(UNITS_DATA.map((u) => normalize(u.estado)).filter(Boolean)),
  ];

  states.forEach((state) => {
    const opt = document.createElement("option");
    opt.value = state;
    opt.textContent = state;
    stateSelect.appendChild(opt);
  });

  stateSelect.addEventListener("change", () => {
    citySelect.innerHTML = '<option value="">Cidade</option>';
    citySelect.disabled = true;
    mapWrapper.style.display = "none";
    mapIframe.innerHTML = "";

    const selectedState = stateSelect.value;

    const cities = UNITS_DATA.filter(
      (u) => normalize(u.estado) === selectedState
    )
      .map((u) => normalize(u.cidade))
      .filter(Boolean);

    [...new Set(cities)].forEach((city) => {
      const opt = document.createElement("option");
      opt.value = city;
      opt.textContent = city;
      citySelect.appendChild(opt);
    });

    citySelect.disabled = false;
  });

  searchBtn.addEventListener("click", () => {
    const selectedState = stateSelect.value;
    const selectedCity = citySelect.value;

    const unit = UNITS_DATA.find(
      (u) =>
        normalize(u.estado) === selectedState &&
        normalize(u.cidade) === selectedCity
    );

    if (!unit || !unit.iframe) return;

    mapIframe.innerHTML = unit.iframe;
    mapWrapper.style.display = "block";
  });
});
