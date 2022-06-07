const $idbuttombars=document.getElementById('buttom-bars');
const $idmenuprimary=document.getElementById('navbar-primary');
const $activeboton=()=>$idbuttombars.classList.toggle('active');
const $activeNavMenuPrimary=()=>$idmenuprimary.classList.toggle('active-navbar-primary');
const $idicon=document.querySelector('#buttom-bars #btnicon');
$idbuttombars.addEventListener('click',$activeNavMenuPrimary);
$idbuttombars.addEventListener('click',$activeboton);
$idbuttombars.addEventListener('click',()=>{
    if($idicon.classList.contains('fa-bars')){
        $idicon.classList.remove('fa-bars');
        $idicon.classList.add('fa-times');
    }else{
        $idicon.classList.remove('fa-times');
        $idicon.classList.add('fa-bars');
    }
})




