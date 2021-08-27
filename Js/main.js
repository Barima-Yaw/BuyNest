'use strict';

//Inventory Button
const Inventory = document.getElementById('inventory');
const sub = document.getElementById('sub');

// Adding event listener to inventory button
Inventory.addEventListener('click', () => {
  sub.classList.toggle('sub');
});

//Back to top button
const topButton = document.getElementById('top-button');
const topBtn = document.getElementById('top-btn');

//Adding animation to back to top button
window.addEventListener('scroll', () => {
  window.pageYOffset > 400
    ? (topButton.style.top = '85%')
    : (topButton.style.top = '-5rem');
});

window.addEventListener('scroll', () => {
  window.pageYOffset > 400
    ? (topBtn.style.top = '85%')
    : (topBtn.style.top = '-5rem');
});

// Adding event listener to back to top button
document.addEventListener('scroll', () => {
  topButton.classList.remove('bottom');
  topButton.classList.add('top-button');
});

//Shop Deatils links
let shopLinks = document.querySelectorAll('.shopLink');

// Adding event listener to shop detail links button
shopLinks.forEach(shopLink => {
  shopLink.addEventListener('click', function () {
    shopLinks.forEach(link => link.classList.remove('active'));
    this.classList.add('active');
  });
});

//Shop Sorting Buttons
let sortingLinks = document.querySelectorAll('#sort');

//Adding Event Listener to sorting buttons
sortingLinks.forEach(sort => {
  sort.addEventListener('click', function () {
    sortingLinks.forEach(sortLink => sortLink.classList.remove('active'));
    this.classList.add('active');
  });
});
