<template>
  <footer>
    <img src="@/assets/channel1-footer.png" alt="" width="50"/>
    <div>
      <p>© Copyright {{new Date().getFullYear()}} • Channel 1 Media Solutions • <router-link :to="{name:'Privacy Policy'}">Privacy Policy</router-link> • <a href="http://www.channel1media.com" target="_blank" rel="noopener noreferrer">www.channel1media.com</a></p>
    </div>
  </footer>
</template>


<style lang="scss" scoped>
footer {
  position: relative;
  text-align: center;
  padding: 34px;  
  background:var(--grey);
  font-family: Helvetica, Arial, sans-serif;
  img {
    position: relative;
    max-width: 50vw;
  } 
  > div {
    line-height: 1.6;
    font-size: 0.875rem;
    line-height: 1.6;
    max-width: 1000px;
    margin: 0 auto;
    margin-top:0.5rem;
    color:var(--black);
  }
  a {
    color:inherit;
    display: inline-block;
    text-decoration: none;
  }
}
</style>