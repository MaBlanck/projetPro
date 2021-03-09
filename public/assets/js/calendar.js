/* *
 * Permet de bloquer les dates antérieur à la date sélectionnée
 */

let dateFrom = document.getElementById('checkInDate');
let dateTo = document.getElementById('checkOutDate');

dateFrom.addEventListener('change', () => {
    dateTo.setAttribute('min', dateFrom.value);
})