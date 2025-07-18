document.addEventListener('DOMContentLoaded', function () {
  // 📱 Mobile menu toggle
  const menuButton = document.querySelector('nav button');
  const mobileMenu = document.querySelector('.mobile-menu');
  const closeButton = document.querySelector('.mobile-menu-close');

  if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', function () {
      mobileMenu.classList.remove('hidden');
    });
  }

  if (closeButton && mobileMenu) {
    closeButton.addEventListener('click', function () {
      mobileMenu.classList.add('hidden');
    });
  }

  // 🔗 Tutup mobile menu saat klik link
  const mobileLinks = document.querySelectorAll('.mobile-menu a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', function () {
      mobileMenu.classList.add('hidden');
    });
  });

  // 🧭 Smooth scrolling untuk anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (!targetId || targetId === '#') return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // 💥 Efek aktif saat klik tombol navigasi
  const navButtons = document.querySelectorAll('.nav-link, .join-btn');
  navButtons.forEach(button => {
    button.addEventListener('mousedown', function () {
      this.classList.add('shadow-md');
    });

    button.addEventListener('mouseup', function () {
      setTimeout(() => {
        this.classList.remove('shadow-md');
      }, 150);
    });

    button.addEventListener('mouseleave', function () {
      this.classList.remove('shadow-md');
    });
  });

  // 🖼️ Modal image viewer
  const modal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImage");

  // Fungsi untuk buka modal
  // === Galeri Swipe/Slide ===
  let galleryImages = [];
  let currentGalleryIndex = 0;

  function updateGalleryModal(idx) {
    const img = galleryImages[idx];
    if (!img) return;
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImage");
    const modalTitle = document.getElementById("modalTitle");
    const modalLocation = document.getElementById("modalLocation");
    const modalDesc = document.getElementById("modalDesc");
    if (modal && modalImg && modalTitle && modalLocation && modalDesc) {
      modalImg.src = img.src;
      modalTitle.textContent = img.alt || "Kegiatan";
      modalLocation.textContent = img.getAttribute('data-location') || "Lokasi tidak diketahui";
      modalDesc.textContent = img.getAttribute('data-desc') || "";
    }
  }

  window.openModal = function (img) {
    galleryImages = Array.from(document.querySelectorAll('#gallery img'));
    currentGalleryIndex = galleryImages.indexOf(img);
    updateGalleryModal(currentGalleryIndex);
    const modal = document.getElementById("imageModal");
    if (modal) {
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    }
  };

  // Fungsi untuk tutup modal
  window.closeModal = function () {
    if (modal) {
      modal.classList.remove("flex");
      modal.classList.add("hidden");
    }
  };

  // Tutup modal saat klik di luar gambar
  if (modal) {
    modal.addEventListener("click", function (e) {
      if (e.target === modal) {
        closeModal();
      }
    });
  }

  // 📖 Learn more modal untuk Activities
  const activityModal = document.getElementById("activityModal");
  const modalTitle = document.getElementById("activityModalTitle");
  const modalDesc = document.getElementById("activityModalDesc");
  const activityModalImg = document.getElementById("activityModalImg");
  const closeActivityModalBtn = document.getElementById("activityModalClose");

  document.querySelectorAll(".learn-more-btn").forEach(button => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      const title = this.getAttribute("data-title");
      const desc = this.getAttribute("data-desc");
      const img = this.getAttribute("data-img");

      modalTitle.textContent = title;
      modalDesc.textContent = desc;
      activityModalImg.src = img;
      activityModalImg.alt = title;

      activityModal.classList.remove("hidden");
      activityModal.classList.add("flex");
    });
  });

  window.closeActivityModal = function () {
    activityModal.classList.remove("flex");
    activityModal.classList.add("hidden");
  };

  if (activityModal) {
    activityModal.addEventListener("click", function (e) {
      if (e.target === activityModal) {
        closeActivityModal();
      }
    });
  }

  // 🔐 Auth modal (login/register)
  function openAuthModal() {
    const modal = document.getElementById('authModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    openTab('login');
  }

  window.closeAuthModal = function () {
    const modal = document.getElementById('authModal');
    modal.classList.remove('flex');
    modal.classList.add('hidden');
  };

  window.openTab = function (tab) {
    const login = document.getElementById('formLogin');
    const reg = document.getElementById('formRegister');
    const tabLogin = document.getElementById('tabLogin');
    const tabReg = document.getElementById('tabRegister');
    if (tab === 'login') {
      login.classList.remove('hidden');
      reg.classList.add('hidden');
      tabLogin.classList.add('border-green-600');
      tabReg.classList.remove('border-green-600');
    } else {
      login.classList.add('hidden');
      reg.classList.remove('hidden');
      tabReg.classList.add('border-green-600');
      tabLogin.classList.remove('border-green-600');
    }
  };

  window.submitLogin = function (e) {
    e.preventDefault();
    alert('Login berhasil!');
    closeAuthModal();
  };

  window.submitRegister = function (e) {
    e.preventDefault();
    alert('Registrasi berhasil!');
    openTab('login');
  };

  const joinLink = document.querySelector('a[href="#join"]');
  if (joinLink) {
    joinLink.addEventListener('click', function (e) {
      e.preventDefault();
      openAuthModal();
    });
  }
});

// === Script dari welcome.blade.php untuk modal login/register dan mobile menu ===
window.openLoginModal = function() {
    document.getElementById('loginModal').classList.remove('hidden');
    document.body.classList.add('backdrop-blur-sm');
};
window.closeLoginModal = function() {
    document.getElementById('loginModal').classList.add('hidden');
    document.body.classList.remove('backdrop-blur-sm');
};
window.openRegisterModal = function() {
    window.closeLoginModal();
    document.getElementById('registerModal').classList.remove('hidden');
    document.body.classList.add('backdrop-blur-sm');
};
window.closeRegisterModal = function() {
    document.getElementById('registerModal').classList.add('hidden');
    document.body.classList.remove('backdrop-blur-sm');
};

// Mobile menu toggle (untuk id baru)
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuBtn = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    if (mobileMenuBtn && mobileMenu && closeMobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
        });
        closeMobileMenu.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
        });
        // Close mobile menu when clicking outside nav
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });
    }
});

function showPrevImage() {
  if (galleryImages.length === 0) return;
  currentGalleryIndex = (currentGalleryIndex - 1 + galleryImages.length) % galleryImages.length;
  updateGalleryModal(currentGalleryIndex);
}
function showNextImage() {
  if (galleryImages.length === 0) return;
  currentGalleryIndex = (currentGalleryIndex + 1) % galleryImages.length;
  updateGalleryModal(currentGalleryIndex);
}

document.addEventListener('DOMContentLoaded', function () {
  const prevBtn = document.getElementById('modalPrev');
  const nextBtn = document.getElementById('modalNext');
  if (prevBtn) prevBtn.addEventListener('click', showPrevImage);
  if (nextBtn) nextBtn.addEventListener('click', showNextImage);

  // Swipe gesture (touch)
  let startX = null;
  const modal = document.getElementById('imageModal');
  if (modal) {
    modal.addEventListener('touchstart', function(e) {
      if (e.touches.length === 1) startX = e.touches[0].clientX;
    });
    modal.addEventListener('touchend', function(e) {
      if (startX === null) return;
      const endX = e.changedTouches[0].clientX;
      if (endX - startX > 50) showPrevImage();
      else if (startX - endX > 50) showNextImage();
      startX = null;
    });
    // Mouse drag (desktop)
    let mouseDownX = null;
    modal.addEventListener('mousedown', function(e) {
      mouseDownX = e.clientX;
    });
    modal.addEventListener('mouseup', function(e) {
      if (mouseDownX === null) return;
      const diff = e.clientX - mouseDownX;
      if (diff > 50) showPrevImage();
      else if (diff < -50) showNextImage();
      mouseDownX = null;
    });
  }
});

// Fix: Event listener untuk tombol kembali pada modal activity
document.addEventListener('DOMContentLoaded', function () {
  // Event listener untuk tombol X pada modal activity
  const closeActivityModalBtn = document.getElementById('activityModalClose');
  if (closeActivityModalBtn) {
    closeActivityModalBtn.addEventListener('click', function(e) {
      e.preventDefault();
      window.closeActivityModal();
    });
  }
  // Event listener untuk tombol kembali pada modal activity
  const activityBackBtn = document.querySelector('#activityModal button.bg-teal-600');
  if (activityBackBtn) {
    activityBackBtn.addEventListener('click', function(e) {
      e.preventDefault();
      window.closeActivityModal();
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.querySelector('.navigation-bg');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 20) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  });
});

// Tombol 'Menjadi Member' langsung buka modal register
const memberBtn = document.querySelector('a[href="#join"]');
if (memberBtn) {
  memberBtn.addEventListener('click', function(e) {
    e.preventDefault();
    if (typeof openRegisterModal === 'function') openRegisterModal();
  });
}