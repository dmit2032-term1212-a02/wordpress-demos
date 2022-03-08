//step 1 - select element the user will click/toggle
const clickButton = document.querySelector('.toggle-icon');

//step 2 - add the click event
clickButton.addEventListener('click', () => {
    document.querySelector('body').classList.toggle('show');
});
