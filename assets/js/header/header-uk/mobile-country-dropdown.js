
document.addEventListener('DOMContentLoaded', function () {
  // Elements
  const selectBtn = document.getElementById('countrySelectMobile');
  const dd = document.getElementById('countryDropdown');
  const arrow = document.getElementById('countryArrow');
  const currentFlag = document.getElementById('currentFlag');
  const currentCountry = document.getElementById('currentCountry');
  const countryInput = document.getElementById('countryInput'); // your hidden form field

  if (!selectBtn || !dd) return;

  // Toggle dropdown
  function toggleCountryDropdownLocal(e) {
    e.stopPropagation();
    const opened = dd.classList.toggle('show');
    arrow.textContent = opened ? '▲' : '▼';
    selectBtn.setAttribute('aria-expanded', String(opened));
  }

  // Close dropdown helper
  function closeCountryDropdownLocal() {
    dd.classList.remove('show');
    arrow.textContent = '▼';
    selectBtn.setAttribute('aria-expanded', 'false');
  }

  // Attach toggle to the select box
  selectBtn.addEventListener('click', toggleCountryDropdownLocal);

  // Handle selecting a country (event delegation)
  dd.addEventListener('click', function (e) {
    const li = e.target.closest('li');
    if (!li) return;
    const name = li.getAttribute('data-name') || li.textContent.trim();
    const flag = li.getAttribute('data-flag') || li.querySelector('img')?.src;

    if (name) currentCountry.textContent = name;
    if (flag) currentFlag.src = flag;

    // if you want to submit to PHP
    if (countryInput && name) {
      countryInput.value = name.toLowerCase().includes('united arab') ? 'uae' : (name.toLowerCase().includes('united kingdom') ? 'uk' : name.toLowerCase());
      // submit if you actually want to submit immediately:
      // document.getElementById('countryForm').submit();
    }

    closeCountryDropdownLocal();
  });

  // Close when clicking outside
  document.addEventListener('click', function (e) {
    if (!selectBtn.contains(e.target) && !dd.contains(e.target)) {
      closeCountryDropdownLocal();
    }
  });

  // Close on Esc
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeCountryDropdownLocal();
  });
});