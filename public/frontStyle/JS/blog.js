// Vars
const readMoreBtns = document.querySelectorAll('.read-more')
const searchInp = document.getElementById('search-inp')
const searchBtn = document.querySelector('.search-btn')
const allCards = document.querySelectorAll('.card')
const cardSection = document.querySelector('.left-section')

// Text Wrapper
readMoreBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    btn.previousElementSibling.classList.toggle('text-wrapper')  
    
    if(btn.textContent == 'Read More'){
      btn.innerHTML = 'Read Less'
    }else{
      btn.textContent = 'Read More'
    }
  })
})

// Search function
searchBtn.addEventListener('click',search)

function search(){
  const searchTrim = searchInp.value.trim().toLowerCase()
  allCards.forEach(card =>{
    let cardTitle = card.children[1].children[0]
    let cardTitleText = cardTitle.textContent.trim().toLowerCase()

    if (cardTitleText.includes(searchTrim)){
      cardTitle.parentElement.parentElement.style.display = 'block'
      console.log(card.textContent)
    }else{
      cardTitle.parentElement.parentElement.style.display = 'none'
    }
  })
  
}

// Return all Cards if User Start Search
searchInp.addEventListener('input',()=>{
  allCards.forEach(card =>{
    card.style.display = 'block'
  })
})

