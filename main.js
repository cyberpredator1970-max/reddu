document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    if(mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            alert('Mobile menu toggled!');
        });
    }

    // FAQ Accordion Logic
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqItem = question.parentElement;
            
            // Close other open faqs
            document.querySelectorAll('.faq-item.active').forEach(item => {
                if(item !== faqItem) {
                    item.classList.remove('active');
                }
            });

            // Toggle current faq
            faqItem.classList.toggle('active');
        });
    });

    // 10 Second Popup Logic
    const delayPopup = document.getElementById('delay-popup');
    const closePopupBtn = document.getElementById('close-popup');

    if (delayPopup && closePopupBtn) {
        // Show popup after 10 seconds
        setTimeout(() => {
            delayPopup.classList.add('show-popup');
        }, 10000);

        // Close popup on button click
        closePopupBtn.addEventListener('click', () => {
            delayPopup.classList.remove('show-popup');
        });

        // Close popup when clicking outside the content
        delayPopup.addEventListener('click', (e) => {
            if (e.target === delayPopup) {
                delayPopup.classList.remove('show-popup');
            }
        });
    }

    // Dropdown logic for Platforms menu
    const dropdownLink = document.querySelector('.dropdown-container > a');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    if (dropdownLink && dropdownMenu) {
        dropdownLink.addEventListener('click', (e) => {
            e.preventDefault();
            dropdownMenu.classList.toggle('show');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdownLink.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    }
});
