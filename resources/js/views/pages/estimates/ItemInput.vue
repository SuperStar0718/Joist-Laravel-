<script setup>
const { type, classname, placeholder } = defineProps({
  type: {
    type: String,
    default: "text",
  },
  classname: {
    type: String,
    default: "",
  },
  placeholder: {
    type: String,
    default: "",
  },
});
</script>
<template>
  <input :class="classname" class="item-input" :type="type" :placeholder="placeholder" />
</template>
