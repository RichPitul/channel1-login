<template>
  <div class="login">
    <div class="holder">
      <div>
        <h1>Channel 1 Media</h1>
        <p v-if="extraAccess">You've successfully logged in with an account that has additional access.</p>
        <p v-else>You've successfully logged in.</p>
        <div class="ui">            
            <button>Login as Admin</button>
            <button>Login with your email</button>            
            <p>Login as another account</p>            
            <div>
                <input type="text" name="email" id="email" placeholder="email address">
                <button class='go'>Go</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name:'Redirect',
    data() {
        return {
            extraAccess:true
        }
    }
}
</script>

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
  button, a {
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
    line-height: 1;
    color: #fff;
    user-select: none;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    padding:8px;
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
.ui  {    
    > div {
        display:flex;
        gap:8px;
        > * {
            flex-grow: 1;
        }
        .go {
            flex-grow: 0;
        }
    }
    > button {
        width:100%;
        text-align: center;
    }
}
</style>