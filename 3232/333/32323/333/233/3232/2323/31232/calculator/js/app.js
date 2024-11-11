const app = (function () {
  "use strict"

  const forms = () => {
    $('[data-entity="calc-params"]').on("submit", function (e) {
      e.preventDefault()
      const $form = $(this)
      const $rowsForm = $('[data-entity="new-rows"]')
      const $customSubmit = $('[data-entity="custom-submit"]');
      console.log($customSubmit.val());
      console.log($form.attr('action'));
      if ($customSubmit.val() == 'N') {
        $.post(
            "/calculator/calculate.php",
            $form.serialize() + $rowsForm.serialize(),
            function (result) {
              $('[data-entity="pay"]').text(result.pay_print)
              $('[data-entity="overpice"]').text(result.overprice_print + " руб.")
              $('[data-entity="total"]').text(result.total_print + " руб.")
              $('[data-entity="amount"]').text(result.amount_print + " руб.")

            },
            "json"
        )
      } else {
        e.currentTarget.submit();
      }
    })

    $('[data-entity="calc-email"]').on("submit", function (e) {
      e.preventDefault()
      const $form = $(this)
      const $calcForm = $('[data-entity="calc-params"]')
      const $rowsForm = $('[data-entity="new-rows"]')
      const sendData =
        $form.serialize() + $rowsForm.serialize() + $calcForm.serialize()

      $.post("/calculator/calculate.php", sendData, function (result) {
        $(".modal").modal("hide")
        $("#myModal_ty").modal("show")
      })
    })

    /*$('[data-entity="download"]').on("click", function (e) {
      e.preventDefault()
      const $form = $('[data-entity="calc-params"]')
      const $rowsForm = $('[data-entity="new-rows"]')
      $.post(
        "/calc/calculate.php",
        $form.serialize() + $rowsForm + "&DOWNLOAD=Y",
        function (result) {
          window.location.href = result.file
        },
        "json"
      )
    })*/

    $('[data-entity="download"]').on("click", function (e) {
      e.preventDefault()
      const $form = $('[data-entity="calc-params"]');
      const $customSubmit = $('[data-entity="custom-submit"]');
      $customSubmit.val('Y');
      console.log(4556);
      $form.attr('action', '/calculator/result/');
      $form.submit();
      $customSubmit.val('N');
    })
  }

  const submitOnLoad = () => {
    $('[data-entity="calc-params"]').submit()
  }

  return {
    init: function () {
      forms()
      submitOnLoad()
    },
  }
})()

$(document).ready(function () {
  app.init()
})
