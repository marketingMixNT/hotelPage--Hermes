import marquee from "vanilla-marquee";

const marqueeDiv = document.querySelector("#marquee")

if(marqueeDiv){

    new marquee(marqueeDiv ,{
        speed: 100,
        // duplicated: true,
    });
}