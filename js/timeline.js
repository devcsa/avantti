const DOM = {
   timelineDate: document.querySelectorAll(".timeline__date"),
   timelineElem: document.querySelectorAll(".timeline__elem"),
   timelineBar: document.querySelector(".timeline__bar"),
};

const __getDir = (timelineElem) => {
   if (timelineElem.classList.contains("timeline__elem--left")) {
      return "left";
   } else if (timelineElem.classList.contains("timeline__elem--right")) {
      return "right";
   }
};

const setDirEvent = () => {
   DOM.timelineElem.forEach((elem) => {
      const direction = __getDir(elem);

      const timelineEvent = elem.querySelector(".timeline__event");

      timelineEvent.classList.add(`timeline__event--${direction}`);
   });
};

const __getBGImage = () => {
   const compStyle = getComputedStyle(DOM.timelineBar);

   return compStyle.backgroundImage;
};

const __getBGSize_height = () => {
   const timebarHeight = DOM.timelineBar.offsetHeight;

   return timebarHeight;
};

const __getBGPos_y = (dateElem) => {
   const timelinebarBox = DOM.timelineBar.getBoundingClientRect();

   const dateBox = dateElem.getBoundingClientRect();

   const pos_y = dateBox.top - timelinebarBox.top;

   return pos_y;
};

const setDateBG = () => {
   const bgImg = __getBGImage();

   const bgHeight = __getBGSize_height();

   DOM.timelineDate.forEach((elem) => {
      elem.style.backgroundImage = bgImg;
      elem.style.backgroundSize = `100% ${bgHeight}px`;

      const dateOffset = __getBGPos_y(elem);

      elem.style.backgroundPosition = `0 -${dateOffset}px`;
   });
};

window.addEventListener("load", () => {
   setDirEvent();

   setDateBG();
});

var elemento = document.querySelector(".content");
var estilo = window.getComputedStyle(elemento);
var timeline = document.querySelector(".timeline");
var estilotimeline = window.getComputedStyle(timeline);
