import './bootstrap';
import 'preline';
import Swal from 'sweetalert2';

window.Swal = Swal;

document.addEventListener('livewire:navigated', () => {
    if (window.HSStaticMethods && typeof window.HSStaticMethods.autoInit === 'function') {
        window.HSStaticMethods.autoInit();
    }
});