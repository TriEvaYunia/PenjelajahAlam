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
  window.openModal = function (img) {
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImage");
    const modalTitle = document.getElementById("modalTitle");
    const modalLocation = document.getElementById("modalLocation");

    if (modal && modalImg && modalTitle && modalLocation) {
        modalImg.src = img.src;
        modalTitle.textContent = img.alt || "Kegiatan";
        modalLocation.textContent = img.getAttribute('data-location') || "Lokasi tidak diketahui";

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
};

});
