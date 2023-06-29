<template>
  <div class="login">
    <div class="holder">
      <div>
        <h1>Channel 1 Media</h1>
        <p>Login with your account to access your services</p>
      </div>
    </div>
  </div>
</template>


<style lang="scss" scoped>
.login {  
  flex-grow: 1;    
  display: grid;
  place-items:center;
  background-image:url('@/assets/bg.jpg');
  background-size: cover;
  background-position: center;
  > .holder {
    width: 300px;
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 40px;
    padding:1rem;
    background:var(--dark-blue);
  }  
  a {
    background-color: #4285F4;
    border:1px solid #4285F4;
    text-transform: uppercase;
    text-align: center;
    display: flex;
    justify-content:flex-start;
    align-items: center;
    outline: none;    
    gap:14px;
    margin:0;
    font-size: 14px;    
    letter-spacing: 1px;
    line-height: 1;
    color: #fff;
    user-select: none;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    cursor: pointer;    
    @media (hover: hover) {
      transition: all 0.2s ease-in-out;
      &:hover {
        box-shadow: 0px 0px 8px 6px rgba(0, 45, 98, 0.4);
      }
    }
  } 
  h1, p {
    color:var(--white);
    font-family: Helvetica, Arial, sans-serif;
    text-align: center;
  }
  h1 {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 1.25rem;
  }
  p {    
    padding:1rem 0;
    span {
      font-weight: bold;
    }
  }   
}
</style>