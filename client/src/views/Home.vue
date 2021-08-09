<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png" />
    <p>{{ this.message }}</p>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      message: "default",
    };
  },
  created() {
    this.$axios.get(`/api/getAnswers.php`).then((res) => {
      // this.$axios.get(`${window.location.href}api/getAnswers.php`).then((res) => {
      console.log(res);
      this.message = res.data;
    });
  },
};
</script>
