$('.kiszeczka-dropdown-menu').click(function() {
    $('.sub-menu').slideToggle('slow', function() {
        console.log('toggled!');
    });
});


let slideContents = [
    {
        text: 'Smak najwspanialszych wspomnień',
        subtext: 'Najlepsze gatunki mięsa od starannie wybranych i godnych zaufania dostawców',
        btn: 'Na czym nam zależy'
    },    
    {
        text: 'Od pokoleń tradycyjnie najwyższa jakość',
        subtext: `Dziadek, ojciec i dwaj synownie - trzy pokolenia, 
                  dzięki którym KISZECZKA od siedemdziesięciu ośmu lat
                  oferuje naturalne wyroby wędliniarskie najwyższej jakości`,
        btn: 'To nasz sekret'
    },    
    {
        text: 'Ręcznie wyrabiamy wędliny',
        subtext: 'Najlepsze gatunki mięsa od starannie wybranych i godnych zaufania dostawców',
        btn: 'Więcej'
    },
];

function loadSliderText() {
    let  i = 0;
    slideContents.forEach(function(slideContent) {
        let slide = document.querySelectorAll('[id^=wds_image_id_]')[i];
        let innerContainer = document.createElement('div');
        let content = `
            <div class='kiszeczka-inner__text'>${slideContent.text}</div>
            <div class='kiszeczka-inner__subtext'>${slideContent.subtext}</div>
            <div class='kiszeczka-inner__btn'>${slideContent.btn}</div>
        `;
        // console.log(slide);
    
        innerContainer.className = 'kiszeczka-inner-container'
        innerContainer.innerHTML = content;
        slide.insertAdjacentElement('beforeEnd', innerContainer);
        ++i;        
    })
}

loadSliderText();