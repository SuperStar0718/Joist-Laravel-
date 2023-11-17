<script setup>
import store from "@/store";
import Item from "./item.vue";

const user = store.state.user
</script>

<template>
  <VRow>
    <VCol cols="12">
      <VCard>
        <VCardText class="d-flex justify-between ">
          <div class="flex-8-1">
            {{ user.data.email }}
          </div>
          <div class="flex-4-1 gap-6  d-flex flex-column ">
            <div class=" ms-4">
              <button class="client_card w-100 min-h-150 border-1  border-primary ">
                <div class="">
                  <VIcon icon="bxs-contact" />
                </div>
                <div class="flex-4-1 gap-6 d-flex flex-column">
                  <div class="ms-4">
                    <button class="client_card w-100 min-h-150 border-1 border-primary">
                      <div class="text-primary d-flex text-center justify-center">
                        <VIcon icon="bxs-plus-circle" />
                        <div class="d-flex text-center align-items-center">
                          ADD CLIENT
                        </div>
                      </div>
                    </button>
                  </div>
                  <VTextField autofocus placeholder="Estimate #" label="Estimate" type="text" />
                  <VTextField autofocus placeholder="Estimate #" label="Date" type="date" />
                  <VTextField autofocus placeholder="Po Number" label="PO Number" type="text" />
                </div>
        </VCardText>
        <VCardText class="gap-4 d-flex flex-column">
          <VRow class="row border-b-1">
            <VCol cols="6">
              Description
            </VCol>
            <VCol cols="2">
              Rate
            </VCol>
            <VCol cols="2">
              Quantity
            </VCol>
            <VCol cols="2">
              Total
            </VCol>
          </VRow>
          <VRow>
            <Item />
          </VRow>
          <VRow>
            <VBtn>
              <VIcon icon="bx-plus" />
              Add Item
            </VBtn>
          </VRow>
        </VCardText>

        <VDivider />

        <VCardText>
          <!-- 👉 Form -->
        </VCardText>
      </VCard>
    </VCol>

    <VCol cols="12">
      <!-- 👉 Deactivate Account -->
      <VCard title="Deactivate Account" />
    </VCol>
  </VRow>
</template>
