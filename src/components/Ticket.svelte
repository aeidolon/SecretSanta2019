<script>
  import { count } from "./stores.js";
  import { onMount } from "svelte";
  let anim = false;

  let x;
  let bell;

  const unsubscribe = count.subscribe(value => {
    x = value;
  });

  onMount(() => {
    bell = new Audio("sleigh-bells.wav");
  });

  let src = "ticket.png";

  export let tex = "Click the ticket..for magic";

  function play() {
    anim = true;
    if (src === "ticket.png") {
      src = "ticket1.png";
    } else if (src === "ticket1.png") {
      src = "ticket2.png";
    }

    if (Math.floor(Math.random() * Math.floor(x)) == 0) {
      bell.play();
      tex = "Merry Christmas!!!";
    } else {
      tex = "Believe...";
      if (x != 0) {
        count.set(Math.floor(x / 2));
      }
    }
    setTimeout(function() {
      anim = false;
    }, 900);
  }
</script>

<style>
  .a {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 200px;

    height: auto;
    width: min(90vw, 800px);
    opacity: 1;
    z-index: 1;

    filter: brightness(110%) drop-shadow(12px 12px 25px rgba(0, 0, 0, 0.5));
  }

  .a:hover {
    filter: brightness(120%) drop-shadow(12px 12px 30px rgba(0, 0, 0, 0.6));
  }
  .anim {
    -webkit-animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
    animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
  }

  @-webkit-keyframes shake {
    10%,
    90% {
      -webkit-transform: translate3d(-1px, 0, 0);
      transform: translate3d(-1px, 0, 0);
    }
    20%,
    80% {
      -webkit-transform: translate3d(2px, 0, 0);
      transform: translate3d(2px, 0, 0);
    }
    30%,
    50%,
    70% {
      -webkit-transform: translate3d(-4px, 0, 0);
      transform: translate3d(-4px, 0, 0);
    }
    40%,
    60% {
      -webkit-transform: translate3d(4px, 0, 0);
      transform: translate3d(4px, 0, 0);
    }
  }

  @keyframes shake {
    10%,
    90% {
      -webkit-transform: translate3d(-1px, 0, 0);
      transform: translate3d(-1px, 0, 0);
    }
    20%,
    80% {
      -webkit-transform: translate3d(2px, 0, 0);
      transform: translate3d(2px, 0, 0);
    }
    30%,
    50%,
    70% {
      -webkit-transform: translate3d(-4px, 0, 0);
      transform: translate3d(-4px, 0, 0);
    }
    40%,
    60% {
      -webkit-transform: translate3d(4px, 0, 0);
      transform: translate3d(4px, 0, 0);
    }
  }
</style>

<main>
  <div class:anim>
    <img class="a" {src} alt="ticket" on:click={play} />
  </div>
</main>
