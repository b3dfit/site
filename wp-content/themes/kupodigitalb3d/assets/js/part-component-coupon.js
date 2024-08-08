// open modal
function openModal(button) {
    const modalId = button.getAttribute('data-hs-overlay');
    const couponCode = button.getAttribute('data-coupon-code');
    const couponUrl = button.getAttribute('data-coupon-url');
    const storeName = button.getAttribute('data-store-name');
    document.getElementById('coupon-modal-label').innerText = atob(couponCode);
    document.getElementById('store-modal-label').innerText = storeName;

    const buttonActiveModal = document.querySelector('.buttonActiveModal');
    buttonActiveModal.setAttribute('onclick', `window.open(atob('${couponUrl}'))`);
}
// end open modal

// close modal
const closeBtn = document.querySelector('#close-modal');
closeBtn.addEventListener("click", closeModal);
function closeModal() {
    const modalId = document.querySelector('#modal-coupon');
    HSOverlay.close(modalId);
}
// end close modal

// close modal
const buttonActiveModal = document.querySelector('.buttonActiveModal');
buttonActiveModal.addEventListener("click", goOfferCoupon);
function goOfferCoupon() {
    //copiar codigo cupom para a area de transferencia 
    const modalId = document.querySelector('#modal-coupon');
    HSOverlay.close(modalId);
}
// end close modal