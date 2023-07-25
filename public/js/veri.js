function validateForm() {
    // Obtener los valores de los campos
    const name = document.getElementById('name').value;
    const category = document.getElementById('category').value;

    // Verificar que los campos no estén vacíos
    if (name.trim() === '') {
        alert('Por favor, ingresa el nombre del juego.');
        return false;
    }

    if (category.trim() === '') {
        alert('Por favor, selecciona una categoría.');
        return false;
    }

    // Si todos los campos están llenos, el formulario se enviará
    return true;
}