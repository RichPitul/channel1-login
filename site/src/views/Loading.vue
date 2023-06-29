<template>
  <section>
    <div>
      <h1>404</h1>
      <h2>Page not found</h2>
      <p>The page you are looking for doesn't exist or an error occurred.</p>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
section {
  display: grid;
  place-items: center;
  width: 100vw;
  height: 100vh;
  box-sizing: border-box;
  > div {
    background: rgba(0, 0, 0, 0.5);
    padding: 1rem;
    border-radius: 8px;
    color: var(--white);
    text-align: center;
    line-height: 1;
  }
}
h1 {
  font-size: 2rem;
  font-family: "Integral CF";
  font-style: normal;
}
h2 {
  font-size: 1.25rem;
  font-family: "Integral CF Demi";
  font-weight: 600;
  font-style: normal;
}
p {
  font-size: 1rem;
  font-family: "Lato";
  font-weight: normal;
  font-style: normal;
  margin-top:0.5rem;
}
</style>