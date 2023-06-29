var item = prompt('input makanan mu : \n (cth: nasi dan hamburger)');

switch (item) {
    case 'hamburger':
        alert('tidak sehat');
        break;
    case 'nasi':
        alert('sehat');
        break;
    default :
        alert('nama makanan tidak ada');
        break;
} 