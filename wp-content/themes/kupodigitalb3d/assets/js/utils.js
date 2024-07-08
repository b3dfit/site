const openBtn = document.querySelector('#copyToClipboard');
const modalText = document.querySelector('#modal-msg-text');

if (openBtn) {
    openBtn.addEventListener('click', (e) => {

        e.preventDefault();

        var tempInput = document.createElement("input");

        document.body.appendChild(tempInput);

        tempInput.value = "HT___DJADSKççÇKKLJ";

        tempInput.select();

        var copied = document.execCommand("copy");

        document.body.removeChild(tempInput);

        modalText.innerHTML = "Link da página copiado com sucesso!";


        HSOverlay.open('#modal-msg-success');
    });
}




//console.log(document.querySelector('#cookies-dismiss-button'));