<script>
  import Ticket from "../components/Ticket.svelte";
  import Snow from "../components/Snow.svelte";
  let tex = "Click the ticket..for magic";
</script>

<style>
  main {
    background-color: #111;
  }
  .bg {
    height: 100vh;
    background-image: url("/bg.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-color: #08211f;

    opacity: 0.9;
    filter: blur(10px);
    z-index: -10;
  }

  .fix {
    height: 100vh;
    width: 100vw;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
    color: #ddd;
  }
  .text {
    height: 100vh;
    width: 100vw;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 0;
    color: #ddd;
  }
  h2 {
    font-size: 3em;
    margin: 50px 0 0.5em 0;
    text-align: center;
    font-family: "Mountains of Christmas", cursive;
    cursor: default;
    -webkit-animation: neon 0.08s ease-in-out infinite alternate;
    animation: neon 0.08s ease-in-out infinite alternate;
  }

  @-webkit-keyframes neon {
    from {
      text-shadow: 0 0 6px rgba(202, 228, 225, 0.92),
        0 0 30px rgba(202, 228, 225, 0.34), 0 0 12px rgba(240, 39, 43, 0.52),
        0 0 21px rgba(240, 39, 43, 0.92), 0 0 34px rgba(240, 39, 43, 0.78),
        0 0 54px rgba(240, 39, 43, 0.92);
    }
    to {
      text-shadow: 0 0 6px rgba(202, 228, 225, 0.98),
        0 0 30px rgba(202, 228, 225, 0.42), 0 0 12px rgba(240, 39, 43, 0.58),
        0 0 22px rgba(240, 39, 43, 0.84), 0 0 38px rgba(240, 39, 43, 0.88),
        0 0 60px #ff0000;
    }
  }
  @keyframes neon {
    from {
      text-shadow: 0 0 6px rgba(202, 228, 225, 0.92),
        0 0 30px rgba(202, 228, 225, 0.34), 0 0 12px rgba(240, 39, 43, 0.52),
        0 0 21px rgba(240, 39, 43, 0.92), 0 0 34px rgba(240, 39, 43, 0.78),
        0 0 54px rgba(240, 39, 43, 0.92);
    }
    to {
      text-shadow: 0 0 6px rgba(202, 228, 225, 0.98),
        0 0 30px rgba(202, 228, 225, 0.42), 0 0 12px rgba(240, 39, 43, 0.58),
        0 0 22px rgba(240, 39, 43, 0.84), 0 0 38px rgba(240, 39, 43, 0.88),
        0 0 60px #ff0000;
    }
  }
</style>

<main>
  <div class="bg" />
  <div class="text">
    <h2>{tex}</h2>
  </div>
  <div class="fix">
    <Ticket bind:tex />
    <Snow />
  </div>

</main>
