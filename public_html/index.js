/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

const btn_scrolltop = document.getElementById("btn_scrolltop")
            btn_scrolltop.addEventListener('click', () => {
                window.scrollTo(0, 0)
            })

            window.onscroll = () => {
                add_btn_scrolltop()
                pageScroll();
            }

            const add_btn_scrolltop = () => {
                if (window.scrollY < 300) {
                    btn_scrolltop.classList.remove("btn-scrolltop-on")
                } else {
                    btn_scrolltop.classList.add("btn-scrolltop-on")
                }
            }

            function pageScroll() {
                var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var scrolled = (winScroll / height) * 100;
                document.getElementById("proBar").style.width = scrolled + "%";
            }


