/* *
 * Permet de bloquer les dates antérieur à la date sélectionnée
 */

let dateFrom = document.getElementById('chooseDateFrom');
let dateTo = document.getElementById('chooseDateTo');

dateFrom.addEventListener('change', () => {
    dateTo.setAttribute('min', dateFrom.value);
})