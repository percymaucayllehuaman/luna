





const menu_links = document.querySelectorAll('.li_header a[href^="#"');  // a[href^="#"
const sections = document.querySelectorAll(".section");

menu_links.forEach(menu_link => {
    menu_link.addEventListener("click",function(){
      // resetClassNav(menu_links);
        document.querySelector(".li_header a.selected_link_header").classList.remove("selected_link_header");
        menu_link.classList.add('selected_link_header');
    });
});
const resetClassNav = (items)=>{
 items.forEach((item, i) => {
   item.classList.remove('selected_link_header');
 });
}

const observer = new IntersectionObserver((entries) => {
    console.log('action observer');
    entries.forEach(entry => {
        const id = entry.target.getAttribute("id");
        console.log(id);
        const menu_link = document.querySelector(`.li_header a[href="#${id}"]`);
        // console.log(menu_link);
        if(entry.isIntersecting){
          console.log('is Intersecting');
            document.querySelector(".li_header a.selected_link_header").classList.remove("selected_link_header");
            menu_link.classList.add('selected_link_header');
        }
    });
},{rootMargin: "-30% 0px -70% 0px"});

sections.forEach(section => observer.observe(section));

function toggle_menu(){
    menu_links.classList.toggle("menu_opened");
}
