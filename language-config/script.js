// utility functions
if (!Util) function Util() { };

Util.addClass = function (el, className) {
    var classList = className.split(' ');
    el.classList.add(classList[0]);
    if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
};

Util.removeClass = function (el, className) {
    var classList = className.split(' ');
    el.classList.remove(classList[0]);
    if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
};

Util.toggleClass = function (el, className, bool) {
    if (bool) Util.addClass(el, className);
    else Util.removeClass(el, className);
};

Util.moveFocus = function (element) {
    if (!element) element = document.getElementsByTagName('body')[0];
    element.focus();
    if (document.activeElement !== element) {
        element.setAttribute('tabindex', '-1');
        element.focus();
    }
};

Util.getIndexInArray = function (array, el) {
    return Array.prototype.indexOf.call(array, el);
};


// File#: _1_language-picker
// Usage: codyhouse.co/license
(function () {
    var LanguagePicker = function (element) {
        this.element = element;
        this.select = this.element.getElementsByTagName('select')[0];
        this.options = this.select.getElementsByTagName('option');
        this.selectedOption = getSelectedOptionText(this);
        this.pickerId = this.select.getAttribute('id');
        this.trigger = false;
        this.dropdown = false;
        this.firstLanguage = false;
        // dropdown arrow inside the button element
        this.arrowSvgPath = '<svg viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>';
        this.globeSvgPath = '<svg viewBox="0 0 16 16"><path d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M13.9,7H12c-0.1-1.5-0.4-2.9-0.8-4.1 C12.6,3.8,13.6,5.3,13.9,7z M8,14c-0.6,0-1.8-1.9-2-5H10C9.8,12.1,8.6,14,8,14z M6,7c0.2-3.1,1.3-5,2-5s1.8,1.9,2,5H6z M4.9,2.9 C4.4,4.1,4.1,5.5,4,7H2.1C2.4,5.3,3.4,3.8,4.9,2.9z M2.1,9H4c0.1,1.5,0.4,2.9,0.8,4.1C3.4,12.2,2.4,10.7,2.1,9z M11.1,13.1 c0.5-1.2,0.7-2.6,0.8-4.1h1.9C13.6,10.7,12.6,12.2,11.1,13.1z"></path></svg>';

        initLanguagePicker(this);
        initLanguagePickerEvents(this);
    };

    function initLanguagePicker(picker) {
        // create the HTML for the custom dropdown element
        picker.element.insertAdjacentHTML('beforeend', initButtonPicker(picker) + initListPicker(picker));

        // save picker elements
        picker.dropdown = picker.element.getElementsByClassName('language-picker__dropdown')[0];
        picker.languages = picker.dropdown.getElementsByClassName('language-picker__item');
        picker.firstLanguage = picker.languages[0];
        picker.trigger = picker.element.getElementsByClassName('language-picker__button')[0];
    };

    function initLanguagePickerEvents(picker) {
        // make sure to add the icon class to the arrow dropdown inside the button element
        var svgs = picker.trigger.getElementsByTagName('svg');
        Util.addClass(svgs[0], 'li4-icon');
        Util.addClass(svgs[1], 'li4-icon');
        // language selection in dropdown
        // ⚠️ Important: you need to modify this function in production
        initLanguageSelection(picker);

        // click events
        picker.trigger.addEventListener('click', function () {
            toggleLanguagePicker(picker, false);
        });
        // keyboard navigation
        picker.dropdown.addEventListener('keydown', function (event) {
            if (event.keyCode && event.keyCode == 38 || event.key && event.key.toLowerCase() == 'arrowup') {
                keyboardNavigatePicker(picker, 'prev');
            } else if (event.keyCode && event.keyCode == 40 || event.key && event.key.toLowerCase() == 'arrowdown') {
                keyboardNavigatePicker(picker, 'next');
            }
        });
    };

    function toggleLanguagePicker(picker, bool) {
        var ariaExpanded;
        if (bool) {
            ariaExpanded = bool;
        } else {
            ariaExpanded = picker.trigger.getAttribute('aria-expanded') == 'true' ? 'false' : 'true';
        }
        picker.trigger.setAttribute('aria-expanded', ariaExpanded);
        if (ariaExpanded == 'true') {
            picker.firstLanguage.focus(); // fallback if transition is not supported
            picker.dropdown.addEventListener('transitionend', function cb() {
                picker.firstLanguage.focus();
                picker.dropdown.removeEventListener('transitionend', cb);
            });
            // place dropdown
            placeDropdown(picker);
        }
    };

    function placeDropdown(picker) {
        var triggerBoundingRect = picker.trigger.getBoundingClientRect();
        Util.toggleClass(picker.dropdown, 'language-picker__dropdown--right', (window.innerWidth < triggerBoundingRect.left + picker.dropdown.offsetWidth));
        Util.toggleClass(picker.dropdown, 'language-picker__dropdown--up', (window.innerHeight < triggerBoundingRect.bottom + picker.dropdown.offsetHeight));
    };

    function checkLanguagePickerClick(picker, target) { // if user clicks outside the language picker -> close it
        if (!picker.element.contains(target)) toggleLanguagePicker(picker, 'false');
    };

    function moveFocusToPickerTrigger(picker) {
        if (picker.trigger.getAttribute('aria-expanded') == 'false') return;
        if (document.activeElement.closest('.language-picker__dropdown') == picker.dropdown) picker.trigger.focus();
    };

    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };
    function loadStaff() {
        var service = getUrlParameter('service');
        const lang = localStorage.getItem('lang') ?? "ar"
        var url = '../staff-data.php?lang=' + lang;
        if (service) {
            url += '?service=' + service;
        }

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                var staffContainer = $('#staff-container');
                staffContainer.empty();
                response.forEach(function(member) {
                    var staffCard = `
                        <div class="col-md-6 col-lg-3">
                            <div class="staff open-modal"  data-id="${member.id}"  data-open="staff-modal">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch" style="background-image: url(${member.avatar});"></div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3>${member.name}</h3>
                                    <span class="position mb-2">${member.position}</span>
                                </div>
                            </div>
                        </div>`;
                    staffContainer.append(staffCard);
                });
            }
        });
    }

    function initButtonPicker(picker) { // create the button element -> picker trigger
        // check if we need to add custom classes to the button trigger
        var customClasses = picker.element.getAttribute('data-trigger-class') ? ' ' + picker.element.getAttribute('data-trigger-class') : '';

        var button = '<button class="language-picker__button' + customClasses + '" aria-label="' + picker.select.value + ' ' + picker.element.getElementsByTagName('label')[0].textContent + '" aria-expanded="false" aria-controls="' + picker.pickerId + '-dropdown">';
        button = button + '<span aria-hidden="true" class="language-picker__label language-picker__flag language-picker__flag--' + picker.select.value + '">' + picker.globeSvgPath + '<em>' + picker.selectedOption + '</em>';
        button = button + picker.arrowSvgPath + '</span>';
        return button + '</button>';
    };

    function initListPicker(picker) { // create language picker dropdown
        console.log(picker, "sadasdasdasdas")
        var list = '<div class="language-picker__dropdown" aria-describedby="' + picker.pickerId + '-description" id="' + picker.pickerId + '-dropdown">';
        list = list + '<p class="li4-sr-only" id="' + picker.pickerId + '-description">' + picker.element.getElementsByTagName('label')[0].textContent + '</p>';
        list = list + '<ul class="language-picker__list" role="listbox">';
        for (var i = 0; i < picker.options.length; i++) {
            var selected = picker.options[i].selected ? ' aria-selected="true"' : '',
                language = picker.options[i].getAttribute('lang');
            list = list + '<li><a lang="' + language + '" hreflang="' + language + '" href="' + getLanguageUrl(picker.options[i]) + '"' + selected + ' role="option" data-value="' + picker.options[i].value + '" class="language-picker__item language-picker__flag language-picker__flag--' + picker.options[i].value + '"><span>' + picker.options[i].text + '</span></a></li>';
        };
        return list;
    };

    function getSelectedOptionText(picker) { // used to initialize the label of the picker trigger button
        var label = '';
        if ('selectedIndex' in picker.select) {
            console.log(label, "----------------label");
            label = picker.options[picker.select.selectedIndex].text;
        } else {
            label = picker.select.querySelector('option[selected]').text;
            
        }
        
        
        return label;
    };

    function getLanguageUrl(option) {
        // ⚠️ Important: You should replace this return value with the real link to your website in the selected language
        // option.value gives you the value of the language that you can use to create your real url (e.g, 'english' or 'italiano')
        return '#';
    };
    const lang = localStorage.getItem("lang") ?? "ar"
    setLang(lang)
    function initLanguageSelection(picker) {
        picker.element.querySelector('.language-picker__list').addEventListener('click', function (event) {
            const item = event.target.closest('.language-picker__item');
            if (!item) return;

            event.preventDefault();
            
            const lang = item.getAttribute('data-lang') || item.getAttribute('data-value');
            if (item.hasAttribute('aria-selected') && item.getAttribute('aria-selected') == 'true') {
                picker.trigger.setAttribute('aria-expanded', 'false');
            } else {
                // Update selected UI
                const oldSelected = picker.element.querySelector('[aria-selected="true"]');
                if (oldSelected) oldSelected.removeAttribute('aria-selected');
                item.setAttribute('aria-selected', 'true');

                const label = picker.trigger.querySelector('.language-picker__label');
                label.setAttribute('class', 'language-picker__label language-picker__flag language-picker__flag--' + item.getAttribute('data-value'));
                label.querySelector('em').textContent = item.textContent;

                picker.trigger.setAttribute('aria-expanded', 'false');

                // ✅ Load language JSON file
                loadLanguage(lang);
                // Optional: save language to localStorage
                localStorage.setItem('lang', lang);
                setLang(lang)
            }
        });
    }

    function setLang(lang) {
        fetch('/save-to-session.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ lang }),
            credentials: 'same-origin'
        })
            .then(r => r.json())
            .then(data => {
                setLangText(data)
            })
            .catch(err => console.error('Fetch failed:', err));
    }
    function setLangText(data){
        menuTranslate(data.menu)
        formTranslate(data)
        mainInfoTranslate(data)
        langNamePosition(data.staff)
        footerTranslate(data.footer)
    }
    function menuTranslate(menuItem){
        const home = document.getElementById('home-link') ?? null;
        const counselor = document.getElementById('counselor-link') ?? null;
        const about = document.getElementById('about-link') ?? null;
        const contact = document.getElementById('contact-link') ?? null;
        if(home && counselor && about && contact){
            document.getElementById('home-link').textContent = menuItem.home;
            document.getElementById('counselor-link').textContent = menuItem.counselor;
            document.getElementById('about-link').textContent = menuItem.about;
            document.getElementById('contact-link').textContent = menuItem.contact;
        }
        else{
            document.getElementById('home-link').textContent = menuItem.home;
            document.getElementById('counselor-link').textContent = menuItem.counselor;
        }
    }

    function formTranslate(data){
        const formTitle = document.getElementById('form-title') ?? null;
        if(formTitle){
            formTitle.textContent = data.form_title
            formItemTranslate(data)
        }
    }
    function formItemTranslate(data){
        const name = document.getElementById('form-name') ?? null;
        const email = document.getElementById('form-email') ?? null;
        const message = document.getElementById('form-message') ?? null;
        const subject = document.getElementById('form-subject') ?? null;
        const submit = document.getElementById('form-submit') ?? null;
        if(name && email && message && subject && submit){
            name.placeholder = data.form_items.name;
            email.placeholder = data.form_items.email;
            message.placeholder = data.form_items.message;
            subject.placeholder = data.form_items.subject;
            submit.value = data.form_items.button_name;
        }

    }

    function mainInfoTranslate(data){
        const mainInfoDescription3 = document.getElementById('main_info_description_3') ?? null;
        const mainInfoDescription2 = document.getElementById('main_info_description_2') ?? null;
        const mainInfoDescription1 = document.getElementById('main_info_description_1') ?? null;
        const mainInfoTitle = document.getElementById('main_info_title') ?? null;
        const mainInfoSubHeading = document.getElementById('main_info_sub_heading') ?? null;
        const slug = document.getElementById('slug') ?? null;
        const slugTitle = document.getElementById('slug-title') ?? null;
        const benefit1 = document.getElementById('benefit-1') ?? null;
        const benefit2 = document.getElementById('benefit-2') ?? null;
        const benefit3 = document.getElementById('benefit-3') ?? null;
        const serviceTitle = document.getElementById('service-title') ?? null;
        const watchVideo = document.getElementById('watch_video') ?? null;
        if(serviceTitle){
            const service = localStorage.getItem('service') ?? null;
            serviceTitle.textContent = data.services[service];
        }
        if(watchVideo){
            watchVideo.textContent = data.watch_video
        }
        if(benefit1 && benefit2 && benefit3){
            benefit1.textContent = data.benefits.ben1
            benefit2.textContent = data.benefits.ben2
            benefit3.textContent = data.benefits.ben3
        }

        if(mainInfoDescription3 && mainInfoDescription2 && mainInfoDescription1 && mainInfoTitle && mainInfoSubHeading){
            mainInfoDescription3.textContent = data.main_info_description_3;
            mainInfoDescription2.textContent = data.main_info_description_2;
            mainInfoDescription1.textContent = data.main_info_description_1;
            mainInfoTitle.textContent = data.main_info_title;
            mainInfoSubHeading.textContent = data.main_info_sub_heading;slug.textContent = data.slug;
            slugTitle.textContent = data.slug_title;
        }
    }

    function langNamePosition(data){
        Object.values(data).forEach(member => {
            $(`#name_${member.id}`).text(member.name)
            $(`#position_${member.id}`).text(member.position)
        });
    }

    function footerTranslate(data){
        const haveQuestion = document.getElementById('have_question') ?? null;
        const explore = document.getElementById('explore') ?? null;
        const about = document.getElementById('footer-about') ?? null;
        const contact = document.getElementById('footer-contact') ?? null;

        haveQuestion.textContent = data.have_question
        explore.textContent = data.explore
        about.textContent = data.about
        contact.textContent = data.contact
    }
    function keyboardNavigatePicker(picker, direction) {
        var index = Util.getIndexInArray(picker.languages, document.activeElement);
        index = (direction == 'next') ? index + 1 : index - 1;
        if (index < 0) index = picker.languages.length - 1;
        if (index >= picker.languages.length) index = 0;
        Util.moveFocus(picker.languages[index]);
    };

    //initialize the LanguagePicker objects
    var languagePicker = document.getElementsByClassName('js-language-picker');
    if (languagePicker.length > 0) {
        var pickerArray = [];
        for (var i = 0; i < languagePicker.length; i++) {
            (function (i) { pickerArray.push(new LanguagePicker(languagePicker[i])); })(i);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const savedLang = localStorage.getItem('lang');
            if (!savedLang) return;                              // язык не сохраняли

            // пробегаем по всем пикерам (на случай, если их несколько)
            pickerArray.forEach(function (picker) {
                // ищем пункт списка с нужным языком
                const item = picker.element.querySelector(
                    '.language-picker__item[data-value="' + savedLang + '"]'
                );
                if (item) {
                    // ⚡ имитируем клик: сработает уже написанный обработчик
                    item.click();
                }
            });

            // подгружаем перевод (если используешь setLang/loadLanguage)
            setLang(savedLang);   // или loadLanguage(savedLang), если нужен JSON-файл
        });

        // listen for key events
        window.addEventListener('keyup', function (event) {
            if (event.keyCode && event.keyCode == 27 || event.key && event.key.toLowerCase() == 'escape') {
                // close language picker on 'Esc'
                pickerArray.forEach(function (element) {
                    moveFocusToPickerTrigger(element); // if focus is within dropdown, move it to dropdown trigger
                    toggleLanguagePicker(element, 'false'); // close dropdown
                });
            }
        });
        // close language picker when clicking outside it
        window.addEventListener('click', function (event) {
            pickerArray.forEach(function (element) {
                checkLanguagePickerClick(element, event.target);
            });
        });
    }

    function menuActiveInScroll(){
        $(".nav-link").on("click", function (){
            $(".nav-link").each(function (){
                $(this).parent().removeClass("active")
            })
            $(this).parent().addClass("active")
        })
    }
    function updateActiveOnScroll() {
        // 1. Самый верх страницы → активен Home


        // 2. Подсветка остальных секций
        const scrollPos = $(window).scrollTop() + offset;
        let currentId = null;

        $sections.each(function () {
            if (scrollPos >= $(this).offset().top) currentId = this.id;
        });

        if (currentId) {
            $links.removeClass("active");
            $links.filter(`[href="#${currentId}"]`).addClass("active");
        }
    }
    menuActiveInScroll()

}());

