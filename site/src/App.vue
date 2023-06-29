<template>
  <main id="top">         
    <router-view></router-view>    
    <Footer />
  </main>
</template>

<script setup>
import Footer from '@/components/Footer.vue';
</script>

<script>
import axios from 'axios';
export default {
  name:'SSO', 
  methods : {    
  }
}
</script>

<style lang="scss">
:root {
  --blue:#77CED8;
  --dark-blue:#1f3044;
  --black: #000000;
  --red: #d91d49;
  --orange: #F36746;
  --white: #ffffff;
  --dark-grey: #ededec;
  --grey: #f5f5f5;
}

html,
body {
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
  font-family: Helvetica, Arial, sans-serif;
  font-style: normal;  
  background:var(--white);  
}
body {
  &::-webkit-scrollbar {
    width: 6px;
  }
  @media (prefers-color-scheme: dark) {
    &::-webkit-scrollbar-track {
      background-color: var(--black);
    }
    &::-webkit-scrollbar-thumb {
      background-color: var(--white);
    }
  }
  @media (prefers-color-scheme: light) {
    &::-webkit-scrollbar-track {
      background-color: var(--white);
    }
    &::-webkit-scrollbar-thumb {
      background-color: var(--black);
    }
  }
}
#top {
  display:flex;
  flex-direction: column;
  min-height: 100vh;
  .dashboard {
    flex-grow: 1;
  }
}
</style>
