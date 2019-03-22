<template>
  <p>{{book.title}}</p>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      book: {}
    };
  },
  created() {
    axios.get(`/api/books/${this.$route.params.id}`).then(({ data }) => {
      this.book = data.data;
    });
  }
};
</script>
