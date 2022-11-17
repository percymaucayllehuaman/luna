





const menu_links = document.querySelectorAll('.li_header a[href^="#"');  // a[href^="#"

menu_links.forEach(menu_link => {
    // menu_link.addEventListener("click",function(){
    //     menu_link.classList.remove('menu_opened');
    //     console.log('menu opened');
    // });
});


const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const id = entry.target.getAttribute("id"); 
        const menu_link = document.querySelector(`.li_header a[href="#${id}"]`);
        
        if(entry.isIntersecting){
            
            //document.querySelector(".li_header a.selected_link_header").classList.remove("is_active");
            // menu_link.classList.add('is_active');
        }
    });
},{rootMargin: "-30% 0px -70% 0px"});


function toggle_menu(){
    menu_links.classList.toggle("menu_opened");
}