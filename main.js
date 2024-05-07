/**
 * Alterna uma classe em um elemento HTML. Se a classe estiver presente, ela será removida;
 * caso contrário, será adicionada.
 * @param {HTMLElement} element O primeiro número.
 * @param {string} num2 classe A classe CSS que será alternada.
 */
function toggleClass(element, className) {
    if (element.classList.contains(className)) {
        element.classList.remove(className);
    } else {
        element.classList.add(className);
    }
}