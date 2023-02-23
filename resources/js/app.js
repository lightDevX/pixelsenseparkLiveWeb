require("./bootstrap");
require("./fileUpload");
import Vue from "vue";
import Pricing from "./components/Pricing.vue";

let estimate_price = document.getElementById("estimate_price");
if (typeof estimate_price != "undefined" && estimate_price != null) {
  let estimatePricing = new Vue({
    el: "#estimate_price",
    components: {
      Pricing
    }
  });
}

window.addEventListener("load", () => {
  document.querySelector("body").classList.remove("preload");
});

$(function() {
  /*
   *----------------------------------------------------------
   * checking scroll down or up for header start
   * ---------------------------------------------------------
   */
  let scrollChecker = 0;
  let scroll = $(window).scrollTop();
  controlHeader(scroll);

  $(window).on("scroll", function() {
    scroll = $(window).scrollTop();
    controlHeader(scroll);
  });

  function controlHeader(scroll) {
    let header = $("header.fixed");
    //tracking Up or Down Scrolling
    if (scroll < 50) {
      header.removeClass(["scrollDown", "scrollUp"]);
      scrollChecker = scroll;
    } else if (scrollChecker < scroll) {
      header.removeClass("scrollUp").addClass("scrollDown");
      scrollChecker = scroll;
    } else if (scrollChecker > scroll) {
      header.removeClass("scrollDown").addClass("scrollUp");
      scrollChecker = scroll;
    }
  }

  /*
   *----------------------------------------------------------
   * alert auto hide
   * ---------------------------------------------------------
   */
  $(".alert")
    .delay(4000)
    .fadeOut();

  /*
   *----------------------------------------------------------
   * Modal goto top
   * ---------------------------------------------------------
   */
  $(window).on("scroll", function() {
    //goto top show and hide
    scroll > 2 * $(window).height()
      ? $(".goto-top").fadeIn()
      : $(".goto-top").fadeOut();
  });

  //goto top click event
  $(".goto-top").click(function() {
    $("html, body").animate(
      {
        scrollTop: 0
      },
      400
    );
  });

  /*
   *----------------------------------------------------------
   * Modal system start
   * ---------------------------------------------------------
   */
  let openModal = document.querySelectorAll(".modal-open");
  let openModalLength = openModal.length;
  for (let i = 0; i < openModalLength; i++) {
    openModal[i].addEventListener("click", function(event) {
      event.preventDefault();
      let deleteId = parseInt(openModal[i].getAttribute("data-id"));
      toggleModal(deleteId);
    });
  }

  const overlay = document.querySelector(".modal-overlay");
  if (overlay) {
    overlay.addEventListener("click", toggleModal);
  }

  let closeModal = document.querySelectorAll(".modal-close");
  let closeModalLength = closeModal.length;
  for (let i = 0; i < closeModalLength; i++) {
    closeModal[i].addEventListener("click", toggleModal);
  }

  document.onkeydown = function(evt) {
    evt = evt || window.event;
    let isEscape = false;
    if ("key" in evt) {
      isEscape = evt.key === "Escape" || evt.key === "Esc";
    } else {
      isEscape = evt.keyCode === 27;
    }
    if (isEscape && document.body.classList.contains("modal-active")) {
      toggleModal();
    }
  };

  function toggleModal(id = null) {
    const body = document.querySelector("body");
    const modal = document.querySelector(".modal");
    const deleteForm = document.querySelector("#item-destroy-form");
    modal.classList.toggle("opacity-0");
    modal.classList.toggle("pointer-events-none");
    body.classList.toggle("modal-active");
    if (typeof id === "number") {
      let deleteUrl = "/admin/quotes/" + id;
      deleteForm.setAttribute("action", deleteUrl);
    } else {
      deleteForm.setAttribute("action", "");
    }
  }
  /*
   *----------------------------------------------------------
   * Modal system end
   * ---------------------------------------------------------
   */

  /*
   *----------------------------------------------------------
   * Mobile menu
   * ---------------------------------------------------------
   */
  let body = document.getElementsByTagName("body")[0],
    menuOverlay = document.getElementById("mobile-menu-overlay"),
    mobileMenu = document.getElementById("mobile-menu"),
    toggleBtn = document.getElementById("toggle-btn");

  if (menuOverlay && toggleBtn) {
    toggleBtn.addEventListener("click", toggleMobileMenu);
    menuOverlay.addEventListener("click", toggleMobileMenu);
  }

  function toggleMobileMenu() {
    menuOverlay.classList.toggle("hidden");
    body.classList.toggle("overflow-hidden");

    mobileMenu.style.transform == "translateX(0px)"
      ? (mobileMenu.style.transform = "translateX(-250px)")
      : (mobileMenu.style.transform = "translateX(0px)");
  }

  let mobileDropdown = document.getElementsByClassName("mobile-dropdown");

  for (let dropdown of mobileDropdown) {
    dropdown.addEventListener("click", function(e) {
      this.children[0].nextElementSibling.classList.toggle("hidden");
    });
  }
});
