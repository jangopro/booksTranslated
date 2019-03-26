<template>
  <div>
    <p>{{book.title}}</p>
    <p>{{book.author}}</p>
    <p>{{book.ISBN}}</p>
    <p>{{book.lang}}</p>
  </div>
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
