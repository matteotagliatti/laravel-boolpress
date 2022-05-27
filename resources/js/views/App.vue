<template>
    <div>
        <h1>Hi i'm Vue!</h1>
        <nav>
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/about">About</router-link></li>
            </ul>
        </nav>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "App",
};
</script>

<style></style>
