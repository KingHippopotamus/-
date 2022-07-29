import axios from "axios";

export class Dashboard {

    constructor() {
        this.paymentPerPersonChecks = document.querySelectorAll('.payment-per-person-container');
        this.detailTab = document.querySelectorAll('.detail-tab');
    }

    init() {
        for (let i = 0; i < this.paymentPerPersonChecks.length; i++) {
            this.paymentPerPersonChecks[i].addEventListener('click', this.paymentPerPersonChecked);
        }
        for (let i = 0; i < this.detailTab.length; i++) {
            this.detailTab[i].addEventListener('click', this.detailTabClick);
        }
    }

    paymentPerPersonChecked = (e) => {
        const targetPayment = e.currentTarget.closest('.payment-per-person-container');
        targetPayment.classList.add('moveToRight');
        setTimeout(() => {
            targetPayment.classList.add('hidden');
        }, 400);
    }

    detailTabClick = (e) => {
        const tab = e.currentTarget;
        const toPayId = this.getUserId(tab);

        axios.get(`/api/dashboard/detail/${toPayId}`).then((res) => {
            console.log(res);
            const detailModalContainer = document.querySelector('#detail-modal');
            detailModalContainer.innerHTML = res.data;
            const closeButtons = detailModalContainer.querySelectorAll('[data-modal-toggle="detail-modal"]');
            for (let i = 0; i < closeButtons.length; i++) {
                closeButtons[i].addEventListener('click', this.modalClose);
            }
        }).catch(error => {
            console.log(error);
        });
    }

    getUserId(element) {
        return element.closest('[data-user-id]').dataset.userId;
    }

    modalClose(e) {
        const targetModalId = e.currentTarget.dataset.modalToggle;
        const targetModal = document.getElementById(`${targetModalId}`);
        targetModal.innerHTML = '';
    }
}
  