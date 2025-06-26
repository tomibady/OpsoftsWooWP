document.addEventListener('DOMContentLoaded', function () {
  const mobileMenuBtn = document.querySelector('[aria-label="Open main menu"]');
  const mobileMenu = document.querySelector('[role="dialog"]');
  const closeBtn = mobileMenu.querySelector('[aria-label="Close menu"]');
  const disclosureBtn = mobileMenu.querySelector('[aria-controls="disclosure-1"]');
  const disclosurePanel = document.getElementById('disclosure-1');

  // Toggle mobile menu
  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.remove('hidden');
    });
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });
  }

  // Toggle disclosure menu (accordion)
  if (disclosureBtn && disclosurePanel) {
    disclosureBtn.addEventListener('click', () => {
      const isExpanded = disclosureBtn.getAttribute('aria-expanded') === 'true';
      disclosureBtn.setAttribute('aria-expanded', String(!isExpanded));
      disclosurePanel.classList.toggle('hidden');
    });
  }

  // Close mobile menu when clicking outside (optional enhancement)
  document.addEventListener('click', (e) => {
    if (
      mobileMenu &&
      !mobileMenu.contains(e.target) &&
      mobileMenuBtn &&
      !mobileMenuBtn.contains(e.target)
    ) {
      mobileMenu.classList.add('hidden');
    }
  });
});
