<script setup>
import store from '@/store'

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
              </button>
            </div>
            <VTextField
              autofocus
              placeholder="Estimate #"
              label="Estimate"
              type="text"
            />
            <VTextField
              autofocus
              placeholder="Estimate #"
              label="Date"
              type="date"
            />
            <VTextField
              autofocus
              placeholder="Po Number"
              label="PO Number"
              type="text"
            />
          </div>
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
