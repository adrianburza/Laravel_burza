self.__BUILD_MANIFEST = function(s, t, e, a, c, i, n, r, h, d, f, o, u, b, k, j) {
    return {
        __rewrites: {
            afterFiles: [{
                has: a,
                source: "/next-api/:path*",
                destination: "/api/:path*"
            }, {
                has: a,
                source: "/web/:path*",
                destination: "/:path*"
            }, {
                has: a,
                source: "/web",
                destination: h
            }],
            beforeFiles: [],
            fallback: []
        },
        "/": [c, t, s, i, n, "static/chunks/3783-a42276b9f16ccf8a.js", "static/chunks/9240-8c3e42786af352a1.js", "static/chunks/pages/index-50a6395c11855bb5.js"],
        "/_error": [s, "static/chunks/pages/_error-a5ef4f5bf5ea77c5.js"],
        "/charters/view/[id]": [c, t, "static/chunks/2cca2479-0d6e35dc33a8a9eb.js", s, d, i, f, o, e, u, r, n, "static/chunks/615-6ea056498a405e42.js", b, k, "static/chunks/9236-5bf594414be0c69d.js", j, "static/css/86b81adcbc423f95.css", "static/chunks/pages/charters/view/[id]-a65d64b19cd74f40.js"],
        "/destinations/[destinationType]/[[...params]]": [c, t, s, d, i, "static/chunks/4966-a97b54b8a104e0a6.js", f, o, e, u, r, n, b, j, "static/css/9c646fc173e888bb.css", "static/chunks/pages/destinations/[destinationType]/[[...params]]-99d44e89475e9148.js"],
        "/manage/direct": [t, s, r, k, "static/chunks/2323-810b45db565bd1e8.js", "static/chunks/pages/manage/direct-a6d072d5e9dc0cc8.js"],
        "/test-client-errors": ["static/chunks/pages/test-client-errors-7abd68433875541f.js"],
        "/test-hero/next-aws": [e, "static/chunks/pages/test-hero/next-aws-904e55c1077a6523.js"],
        "/test-hero/next-image": [e, "static/chunks/pages/test-hero/next-image-ff7e890adfe69bed.js"],
        "/test-hero/original": ["static/chunks/pages/test-hero/original-b10422d506b895d8.js"],
        "/test-server-errors": ["static/chunks/pages/test-server-errors-c180d69b3bc358af.js"],
        sortedPages: [h, "/_app", "/_error", "/charters/view/[id]", "/destinations/[destinationType]/[[...params]]", "/manage/direct", "/test-client-errors", "/test-hero/next-aws", "/test-hero/next-image", "/test-hero/original", "/test-server-errors"]
    }
}("static/chunks/9909-b69b3740e217c02a.js", "static/chunks/4db5f4ac-32a537df4800fb2d.js", "static/chunks/2282-e8b0366ab2b58b5b.js", void 0, "static/chunks/7dcf9772-9ff81d592cacbfeb.js", "static/chunks/868-3cb4e91413a75471.js", "static/chunks/8130-35adba7f4cab58a5.js", "static/chunks/4619-9acfdf0900147478.js", "/", "static/chunks/6917-749b441d5eab9148.js", "static/chunks/1330-a0f342963db792f7.js", "static/chunks/1827-8cd7b9008ce83c31.js", "static/chunks/1937-69552998ac34a7e5.js", "static/chunks/1006-8d1282b2f9985748.js", "static/chunks/5693-a024bc03a6ab1fa7.js", "static/chunks/3765-ae08f9eefe5d8631.js"), self.__BUILD_MANIFEST_CB && self.__BUILD_MANIFEST_CB();