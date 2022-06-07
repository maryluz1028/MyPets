const $modal=document.getElementById('modal-search');
const $buttonSearch=document.getElementById('buttom-search');
const $closemodal=document.getElementById('close-modal');
const $activeButtomSearch=()=>$buttonSearch.classList.toggle('activeButtomSearch');
const $activeSearchModal=()=>$modal.classList.toggle('activeSearchModal');

$buttonSearch.addEventListener('click',$activeSearchModal);
$closemodal.addEventListener('click',$activeSearchModal);

const $searchinput=document.getElementById('s');
$searchinput.setAttribute('placeholder','Buscar...');

