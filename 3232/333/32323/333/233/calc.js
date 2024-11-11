var rangeTimeout;

function rangeSliderCreate(slideIndex, slide) {
    var rangeSliderOptions;
    var rangeSliderType = $(slide).attr('data-range-slider-type');
    var rangeSliderStart = parseFloat($(slide).closest('.range-slider').find('.form-control').val());
    var rangeSliderMin = parseFloat($(slide).closest('.range-slider').find('.form-control').data("min"));
    var rangeSliderMax = parseFloat($(slide).closest('.range-slider').find('.form-control').data("max"));

    if (rangeSliderType === 'weight') {
        rangeSliderOptions = {
            start: [rangeSliderStart],
            range: {
                'min': [rangeSliderMin, 1],
                '28%': [15, 1],
                '48%': [30, 5],
                '60%': [100, 10],
                '70%': [300, 50],
                '80%': [1000, 100],
                'max': [rangeSliderMax]
            },
            connect: 'lower'
        }
    } else if (rangeSliderType === 'volume') {
        rangeSliderOptions = {
            start: [rangeSliderStart],
            range: {
                'min': [rangeSliderMin, 0.01],
                '40%': [0.5, 0.05],
                '50%': [1, 0.1],
                '76%': [3, 0.5],
                '88%': [10, 1],
                'max': [rangeSliderMax]
            },
            connect: 'lower'
        }
    } else if (rangeSliderType === 'size') {
        rangeSliderOptions = {
            start: [rangeSliderStart],
            range: {
              'min': [rangeSliderMin, 1],
              '28%': [15, 1],
              '48%': [30, 5],
              '60%': [100, 10],
              '70%': [300, 20],
              '80%': [500, 20],
              'max': [rangeSliderMax]

            },
            connect: 'lower'
        }
    } else if (rangeSliderType === 'height') {
        rangeSliderOptions = {
            start: [rangeSliderStart],
            range: {
              'min': [rangeSliderMin, 1],
                '28%': [15, 1],
                '48%': [30, 5],
                '60%': [100, 10],
                '80%': [300, 20],
                'max': [rangeSliderMax]

            },
            connect: 'lower'
        }
    } else {
        rangeSliderOptions = {
            start: [1],
            range: {
                'min': [rangeSliderMin],
                'max': [rangeSliderMax]
            },
            connect: 'lower'
        }
    }

    $(slide).attr('data-range-slider-index', slideIndex);

    var rangeSlidersItem = noUiSlider.create(slide.querySelector('.range-slider__ui'), rangeSliderOptions);

    $(slide.querySelector('.range-slider__ui')).data('slider', rangeSlidersItem);

    rangeSlidersItem.on('slide', function (values, handle) {
        clearTimeout(rangeTimeout);
        if (rangeSliderType === 'weight' || rangeSliderType === 'size' || rangeSliderType === 'height' || rangeSliderType === 'count') {
            $(this.target).closest('.range-slider').find('.form-control').val(Math.round(values[handle]));
        } else if (rangeSliderType === 'volume') {
            $(this.target).closest('.range-slider').find('.form-control').val(parseFloat(values[handle]).toFixed(2) /* + ' РјВі'*/ );
        } else {
            $(this.target).closest('.range-slider').find('.form-control').val(values[handle]);
        }
    });
    rangeSlidersItem.on('change', function () {
        var target = $(this.target);
        rangeTimeout = setTimeout(function () {
            target.closest('.range-slider').find('.form-control').trigger("change");
        }, 500);
    });
}

function rangeSliderInit(rangeSliders) {
    for (var i = 0; i < rangeSliders.length; i++) {
        rangeSliderCreate(i, rangeSliders[i]);
    }

    $('.range-slider__control').on('change', function () {
        if ($(this).closest('.range-slider').attr('data-range-slider-type') === 'size' ) {
            if (this.value.replace(/[^0-9]/g, '') > parseInt(this.getAttribute('data-max'))) {
                this.value = parseInt(this.getAttribute('data-max'));
            } else if (this.value.replace(/[^0-9]/g, '') < parseInt(this.getAttribute('data-min')) || this.value.replace(/[^0-9]/g, '') === '') {
                this.value = parseInt(this.getAttribute('data-min'));
            }
            $(this).next().data('slider').set(parseInt(this.value.replace(/[^0-9]/g, '')));
        }

        if ($(this).closest('.range-slider').attr('data-range-slider-type') === 'weight' ) {
            if (this.value.replace(/[^0-9]/g, '') > parseInt(this.getAttribute('data-max'))) {
                this.value = parseInt(this.getAttribute('data-max'));
               
            } else if (this.value.replace(/[^0-9]/g, '') < parseInt(this.getAttribute('data-min')) || this.value.replace(/[^0-9]/g, '') === '') {
                this.value = parseInt(this.getAttribute('data-min'));
            }
            $(this).next().data('slider').set(parseInt(this.value.replace(/[^0-9]/g, '')));
          
            if (parseInt($('[name="max_weight"]').val().replace(/[^0-9]/g, '')) > parseInt($('[name="weight"]').val().replace(/[^0-9]/g, ''))) {
                $('[name="weight"]').val($('[name="max_weight"]').val())
                $('[name="weight"]').next().data('slider').set(parseInt(this.value.replace(/[^0-9]/g, '')));
            }

        } else if ($(this).closest('.range-slider').attr('data-range-slider-type') === 'volume') {
            if (parseFloat(this.value) > parseFloat(this.getAttribute('data-max'))) {
                this.value = parseFloat(this.getAttribute('data-max'));
            } else if (parseFloat(this.value) < parseFloat(this.getAttribute('data-min')) || parseFloat(this.value) === '') {
                this.value = parseFloat(this.getAttribute('data-min'));
            } if ( (!(parseFloat(this.value))) || (parseFloat(this.value) === 0)) {
                this.value = parseFloat(this.getAttribute('data-min'));
            }
            $(this).next().data('slider').set(parseFloat(this.value /*.replace(/[^0-9]/g, '')*/ ).toFixed(2));
        }
    });
}

$(document).ready(function () {

    $('[data-weight-format]').inputmask('integer', {
        mask: "( 999){+|1} кг",
        numericInput: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        rightAlign: false
    });

    $('[data-volume-format]').inputmask({
        rightAlign: false,
        alias: 'numeric',
        digits: 2,
        suffix: ' м³',
        showMaskOnHover: false,
        showMaskOnFocus: false,
    });
    $('[data-size-format]').inputmask({
        mask: "( 999){+|1} см",
        numericInput: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        rightAlign: false
    });

    if ($('.range-slider').length) {
        var rangeSliders = $('.range-slider');
        rangeSliderInit(rangeSliders);
    }

});



    /* ВАРИАНТ выпадашки для пункта Отправки (дизайн не позволяет обойтись стандартными средствами) */
    /* class Dropdown {
        constructor(selector) {
            this.$el = selector
            this.items = []

            var forItems = Array.from(this.$el.querySelectorAll('li'))
            forItems.forEach(function (item) {
                var itemsList = {}
                itemsList.name = item.dataset.name
                itemsList.time = item.dataset.time
                itemsList.summ = item.dataset.summ
                itemsList.id = item.dataset.id
                this.items.push(itemsList)
            }.bind(this))


            this.$el.querySelector('.dropdownJS__label .dropdownJS__text1').textContent = this.items[0].name
            this.$el.querySelector('.dropdownJS__label .dropdownJS__text2-value').textContent = this.items[0].time
            this.$el.querySelector('.dropdownJS__label .dropdownJS__text3').textContent = this.items[0].summ
            this.$el.querySelector('.dropdownJS__label input').value = this.items[0].id

            this.$el.querySelector('.dropdownJS__label').addEventListener('click', event => {
                if (this.$el.classList.contains('open')) {
                    this.close()
                } else {
                    this.open()
                }

            })

            this.$el.querySelectorAll('li').forEach(function (event) {
                event.addEventListener('click', function (event) {
                    this.select(event.currentTarget.dataset.id)
                }.bind(this))
            }.bind(this))

        }

        select(id) {
            const item = this.items.find(i => i.id === id)
            this.$el.querySelector('.dropdownJS__label .dropdownJS__text1').textContent = item.name
            this.$el.querySelector('.dropdownJS__label .dropdownJS__text2-value').textContent = item.time
            this.$el.querySelector('.dropdownJS__label .dropdownJS__text3').textContent = item.summ
            this.$el.querySelector('.dropdownJS__label input').value = item.id
            this.close()
        }

        open() {
            this.$el.classList.add('open')
        }

        close() {
            this.$el.classList.remove('open')
        }
    } */

    // document.querySelectorAll('.dropdownJS').forEach(function (item) {
    //     new Dropdown(item)
    // });

    /* END   выпадашка */


    (function ($) {
        $(function () {
            $('div.calctabs__items').on('click', 'div.calctabs__item:not(.active)', function (e) {
                $(this).addClass('active').siblings().removeClass('active');
                $(this).closest('.calcpage__block').find('.calcform-js.active').find('.calcform__inputs').removeClass('active').eq($(this).index()).addClass('active');

                

            });
        });
    })(jQuery);


    (function ($) {
        $(function () {
            let initialSelect = $("input[data-time]:checked").data("time")
            if (initialSelect) {
                $(`select[data-time=${initialSelect}]`).show()
                $(document).on('change', "input[data-time]", function(e) {
                    let current = $(this).data("time")
                    $(this).closest('.calcform__content').find('select').hide()
                    $(this).closest('.calcform__content').find(`select[data-time=${current}]`).show()
                })
            }

        });
    })(jQuery);


    (function ($) {
        $(function () {
            $(document).on('change', "input[name=swtiches]", function(e) {
                var checked = []
                // document.querySelector('input#switches_2:checked') ? checked.push(document.querySelector('input#switches_2:checked')) : ''
                // document.querySelector('input#switches_3:checked') ? checked.push(document.querySelector('input#switches_2:checked')) : ''
                // console.log(checked)
                // if (checked.length > 0) {
                //     $('input#check10-1').prop("checked", true).trigger('change')
                //     $('input#check10-1').prop("disabled", true)
                // }
                //  else {
                //     $('input#check10-1').prop("checked", false)
                //     $('input#check10-1').prop("disabled", false)
                //  }

            })
        });
    })(jQuery);


    $(document).ready(function() {

        let count = $('.js-calcspot').length;



        $('.calctabs__add').on('click', function(e) {
            e.preventDefault()
            count++

            $('.calctabs__close').hide()

            $(`<div class="js-calcspot calctabs__item calctabs__item-${count}">
            <span class="calctabs__itemplace">${count} место</span>
                <span class="calctabs__close">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M4.32959 7L0 2.67041L2.67041 0L7 4.32959L11.3296 0L14 2.67041L9.67041 7L14 11.3296L11.3296 14L7 9.67041L2.67041 14L0 11.3296L4.32959 7Z" fill="white"></path>
                </svg>
                </span>        
            </div>`).insertBefore($(this))

            $(this).closest('.calcpage__block').find('.calcform-js.active').find('.calcform__content').append(`
            <div class="calcform__inputs  js-calcform__inputs calcform__inputs-${count}" data-inputset="${count}">
            <div class="calctabs__itemplace">Место ${count}</div>
                                <div class="calcform__items calcform__items_three">
                                  <div class="calcform__item">
                                    <div class="calcform__title">Длина</div>
                                    <div class=" form-control__wrapper range-slider range-slider-${count}" data-range-slider-type="size">
                                      <input data-stepdata="ob_len-${count}" data-stepset="${count}"  data-steptype="source_set" class="calc_length form-control range-slider__control" data-max="1000" data-min="1" data-size-format=""
                                       data-new-${count} name="boxLength[]" placeholder="Самое длинное" type="text" inputmode="decimal" value="1">
                                      <div class="range-slider__ui"></div>
                                    </div>
                                  </div>
                                  <div class="calcform__item">
                                    <div class="calcform__title">Ширина</div>
                                    <div class="form-control__wrapper range-slider range-slider-${count}" data-range-slider-type="size">
                                      <input data-stepdata="ob_shir-${count}" data-stepset="${count}"  data-steptype="source_set" class="calc_width form-control range-slider__control" data-max="1000" data-min="1"
                                       data-size-format="" data-new-${count} name="boxWidth[]" placeholder="Самое широкое" type="text" inputmode="decimal" value="1">
                                      <div class="range-slider__ui"></div>
                                    </div>
                                  </div>
                                  <div class="calcform__item">
                                    <div class="calcform__title">Высота</div>
                                    <div class="form-control__wrapper range-slider range-slider-${count}" data-range-slider-type="height">
                                      <input data-stepdata="ob_h-${count}" data-stepset="${count}"  data-steptype="source_set" class="calc_height form-control range-slider__control" 
                                      data-max="500" data-min="1" data-size-format="" data-new-${count} name="boxHeight[]" placeholder="Самое высокое" type="text" inputmode="decimal" value="1">
                                      <div class="range-slider__ui"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="calcform__items calcform__items_two">
                                  <div class="calcform__item">
                                    <div class="calcform__title">Вес одного места</div>
                                    <div class="form-control__wrapper range-slider range-slider-${count}" data-range-slider-type="weight">
                                      <input data-stepdata="ob_w-${count}" data-stepset="${count}"  data-steptype="source_set" class="form-control range-slider__control" data-max="5000" data-min="1"
                                       data-weight-format="" data-new-${count} name="boxWeight[]" placeholder="Вес груза, кг" type="text" inputmode="decimal" value="1">
                                      <div class="range-slider__ui"></div>
                                    </div>
                                  </div>
                                  <div class="calcform__item">
                                  <div class="calcform__title">Количество таких мест</div>
                                  <div class="form-control__wrapper">
                                      <div class="quantity">
                                          <input type="button" value="" class="quantity-minus"
                                                 data-field="quantity">
                                          <input data-newcont-${count} data-stepdata="ob_count-${count}" data-stepset="${count}"  data-steptype="source_set" type="text" step="1" min="1" max="999" value="1" name="boxCount[]"
                                                 class="quantity-field" placeholder="1">
                                          <input type="button" value="" class="quantity-plus"
                                                 data-field="quantity">
                                      </div>
                                  </div>
                              </div>
                                  <div class="calcform__item">
                                    <div class="calcform__title">Общий объем</div>
                                    <div class="form-control__wrapper">
                                    <input data-stepdata="ob_vol-${count}" data-stepset="${count}"  data-steptype="source_set" disabled="disabled" class="auto_volume form-control range-slider__control" 
                                      data-max="20" data-min="0.01" data-volume-format="" data-new-${count} name="boxVolume[]" placeholder="Объём груза, м³" type="text" inputmode="decimal" value="0.01">
                                        <!--<div class="range-slider__ui"></div>-->
                                    </div>
                                  </div>
                                </div>
                              </div>
            `)

            $(`.calctabs__item-${(count)}`).find('.calctabs__close').show()
            $(`.calctabs__item-${(count)}`).addClass('active').siblings().removeClass('active');
            $(`.calcform__inputs-${(count)}`).addClass('active').siblings().removeClass('active');;




            $(`[data-weight-format][data-new-${count}]`).inputmask('integer', {
                mask: "( 999){+|1} кг",
                numericInput: true,
                showMaskOnHover: false,
                showMaskOnFocus: false,
                rightAlign: false
            });

            $(`[data-volume-format][data-new-${count}]`).inputmask({
                rightAlign: false,
                alias: 'numeric',
                digits: 2,
                suffix: ' м³',
                showMaskOnHover: false,
                showMaskOnFocus: false,
            });
            $(`[data-size-format][data-new-${count}]`).inputmask({
                mask: "( 999){+|1} см",
                numericInput: true,
                showMaskOnHover: false,
                showMaskOnFocus: false,
                rightAlign: false
            });

            if ($(`.range-slider-${count}`).length) {
                var rangeSliders = $(`.range-slider-${count}`);
                rangeSliderInit(rangeSliders);
            }



        })

        $(document).on('click', ".calctabs__close", function(e) {
            const result = window.confirm(`Вы действительно хотите удалить место №${count}?`)
             if (result) {
                 $(this).closest(`.calctabs__item-${count}`).remove()
                 $(`.calcform__inputs-${count}`).remove();
                 $(`.calctabs__item-${(count-1)}`).find('.calctabs__close').show()
                 count--
                 $(`.calctabs__item-1`).addClass('active');
                 $(`.calcform__inputs-1`).addClass('active');
                 app.calcDelivery();
             }
         })


    })
