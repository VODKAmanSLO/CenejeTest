<template>
    <div>
        <label>
            <select name="country">
                <option value="slo">Slovenia</option>
                <option value="cro">Croatia</option>
                <option value="all">All Countries</option>
            </select>
        </label>
    </div>
</template>

<script>
export default {
    data() {
        return {}
    },
    mounted() {
        console.log('Component mounted.')
    },
}
</script>
