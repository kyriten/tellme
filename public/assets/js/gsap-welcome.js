let txtWelcome = new SplitType("#txt-welcome");
let charWelcome = document.querySelectorAll(".char");

for (i = 0; i < charWelcome.length; i++) {
    charWelcome[i].classList.add("translate-y-full");
}

gsap.to(".char", {
    y: 0,
    stagger: 0.05,
    delay: 0.02,
    duration: 0.5,
});
gsap.to(
    ".char",
    {
        opacity: 0,
        stagger: -0.05,
    },
    "+=4"
);

let txtTo = new SplitType("#txt-to");
let charTo = document.querySelectorAll(".char");
for (j = 0; j < charTo.length; j++) {
    charTo[j].classList.add("translate-y-full");
}

gsap.to(".char", {
    y: 0,
    stagger: -0.05,
    delay: 0.02,
    duration: 0.5,
});
gsap.to(
    ".char",
    {
        opacity: 0,
        stagger: 0.05,
    },
    "-=2"
);

//Desc
let tl = gsap.timeline({
    defaults: {
        ease: "none",
    },
});

tl.from(
    ".txt-desc",
    {
        duration: 1,
        opacity: 0,
    },
    3
);
tl.to(
    ".txt-heading",
    {
        duration: 1,
        opacity: 0,
    },
    2
);
