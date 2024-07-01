
const dropbtns=document.querySelectorAll('.dropdown-button')
dropbtns.forEach((dropbtn)=>{
  dropbtn.addEventListener('click',
    function(event) {
      // Check if the clicked element has the class 'childClass'
        const button = event.target
        const svg = button.querySelector('svg')
        const dropdown=event.target.nextElementSibling
        // Handle the event
        if (dropdown.classList.contains('show')) {
          dropdown.classList.remove('show');
          svg.classList.remove('rotate-45')
        }else{
          dropdown.classList.add('show');
          svg.classList.add('rotate-45')
        }
      
    }
  )
})


const userbtn=document.getElementById('user-button')
userbtn.addEventListener('click',
    function(event) {
      // Check if the clicked element has the class 'childClass'
        const dropdown=event.target.nextElementSibling
        // Handle the event
        if (dropdown.classList.contains('show')) {
          dropdown.classList.remove('show');
        }else{
          dropdown.classList.add('show');
        }
      
    }
  )

  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    
    if (!event.target.matches('.dropdown-button')) {
      let dropdowns = document.getElementsByClassName("dropdown-content");
      let svgs= document.getElementsByClassName('button-icon')
      for ( let i = 0; i < dropdowns.length; i++) {
        let openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
          
        }
      }
      for ( let i = 0; i < svgs.length; i++) {
        let svg = svgs[i];
        if (svg.classList.contains('active')) {
          svg.classList.remove('active');
        }
      }
    }
    
    if (!event.target.matches('.dropdown-button')) {
      let dropdowns = document.getElementsByClassName("dropdown-content");
      let i;
      for (i = 0; i < dropdowns.length; i++) {
        let openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
      svg.classList.remove('active')

    }
  }