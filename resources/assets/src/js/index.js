window.addEventListener('load', () => {

    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.my_primary_class');
    const links = document.querySelectorAll('.my_primary_class li');
    const lineBurgers = document.querySelectorAll('.hamburger .line');
    const container = document.querySelector('#container');


    hamburger.addEventListener('click', ()=> {
        navLinks.classList.toggle('active')
        links.forEach((link) => {
            link.classList.toggle('fade')
        })

        lineBurgers.forEach((line) => {
            line.classList.toggle('toggle')
        })
    });
    var tl = gsap.timeline();

    const mq = window.matchMedia( "(min-width: 1000px)" );

    if(mq.matches) {
        tl.from('#box', { opacity: 0, y: 50, duration: .5 })
        tl.from('#IOT', { opacity: 0, y: 12, duration: .5, })
        tl.from('#line', { opacity: 0, y: 12, duration: .5, })
        tl.from('#globe', { opacity: 0, y: 12, duration: .5, })
        tl.from('#lock', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", rotation: 65, duration: 1, })
        tl.from('#whatsapp', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.9")
        tl.from('#location', { opacity: 0, scale: .5, ease: "elastic.out(1, .3)", duration: .5, }, "-=.85")
        tl.from('#cloud', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.80")
        tl.from('#boussole', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.75")
        tl.from('#desktop', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.70")
        tl.from('#connexion', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.65")
        tl.from('#tumblr', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.6")
        tl.from('#phone', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.55")
        tl.from('#connectedHome', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.50")
        tl.from('#twitter', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.45")
        tl.from('#dust', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.40")
        tl.from('#screen', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.35")
        tl.from('#apple', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.3")
        tl.from('#router', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.25")
        tl.from('#item_4', { opacity: 0, y: 10, duration: 1, }, "-=.25")
        tl.from('#item_3', { opacity: 0, y: 10, duration: 1, }, "-=.2")
        tl.from('#item_1', { opacity: 0, y: -10, duration: 1, }, "-=.15")
        tl.from('#item_2', { opacity: 0, y: -10, duration: 1, }, "-=.1")
        tl.to('#item_4', { opacity: 0, duration: .5 })
        tl.to('#item_3', { opacity: 0, duration: .5 })
        tl.to('#item_1', { opacity: 0, duration: .5 })
        tl.to('#item_2', { opacity: 0, duration: .5 })
        tl.from('#container', { x: -250, ease: "slow(0.7, 0.7, false)", opacity: .7 })
        tl.to('#container', { x: 0 })
        tl.from('#leftText', { opacity: 0, y: 50, duration: 1, ease: "circ.out" })

    }else {
        tl.from('#box', { opacity: 0, y: 50, duration: .5 })
        tl.from('#IOT', { opacity: 0, y: 12, duration: .5, })
        tl.from('#line', { opacity: 0, y: 12, duration: .5, })
        tl.from('#globe', { opacity: 0, y: 12, duration: .5, })
        tl.from('#lock', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", rotation: 65, duration: 1, })
        tl.from('#whatsapp', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.9")
        tl.from('#location', { opacity: 0, scale: .5, ease: "elastic.out(1, .3)", duration: .5, }, "-=.85")
        tl.from('#cloud', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.80")
        tl.from('#boussole', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.75")
        tl.from('#desktop', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.70")
        tl.from('#connexion', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.65")
        tl.from('#tumblr', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.6")
        tl.from('#phone', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.55")
        tl.from('#connectedHome', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.50")
        tl.from('#twitter', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.45")
        tl.from('#dust', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.40")
        tl.from('#screen', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.35")
        tl.from('#apple', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.3")
        tl.from('#router', { opacity: 0, scale: .5, width: 0, ease: "elastic.out(1, .3)", duration: .5, }, "-=.25")
        tl.to('#item_4', { opacity: 0}, "-=1")
        tl.to('#item_3', { opacity: 0}, "-=1")
        tl.to('#item_1', { opacity: 0}, "-=1")
        tl.to('#item_2', { opacity: 0}, "-=1")
        tl.to('#IoT', { opacity: 0})
        tl.from('#leftText', { opacity: 0, x: -100})
        tl.to('#leftText', { x: 10, duration: 1, ease: "circ.out"})
        .set($('#leftText'), {css:{zIndex:1}})

    }
    



    });