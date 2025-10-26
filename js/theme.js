(function () {
    const quickOrderInput = document.querySelector('[data-quick-order-input]');
    const quickOrderClearButton = document.querySelector('[data-quick-order-clear]');

    if (!quickOrderInput || !quickOrderClearButton) {
        return;
    }

    quickOrderClearButton.addEventListener('click', function (event) {
        event.preventDefault();
        quickOrderInput.value = '';
        quickOrderInput.focus();
    });
})();
