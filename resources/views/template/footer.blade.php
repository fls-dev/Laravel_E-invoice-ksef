<section class="footer">
    {{--    <div class="">FOOTER</div>--}}
    <div id="modalInvoice" class="modal none">
        <div class="modal-content" id="modalInvoiceCont">
            <div class="close-modal">X</div>
            <div class="invoice-box">
                <div class="main-header">
                    <div class="ksef-title-wrapper">
                        <img height="27" alt="logo" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjExIiBoZWlnaHQ9IjE3IiB2aWV3Qm94PSIwIDAgMjExIDE3IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMCAxMi43NTY3VjAuMzY2OTc0SDEuNTcyNzVWNy4yMTcxN0w3Ljk2ODU5IDAuMzQ5NDk5SDkuNjYzNjZMNC42ODMyOSA1LjgxOTE3TDkuOTQzMjYgMTIuNzU2N0g4LjE3ODI5TDMuNjg3MjIgNi43NjI4MkwxLjU3Mjc1IDguOTY0NjZWMTIuNzU2N0gwWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE2LjI0MDMgNC45ODAzN0MxNS40NzE0IDQuOTkyMDIgMTQuNzg5OCA1LjE5MDA3IDE0LjE5NTcgNS41NzQ1MkMxMy42MTMyIDUuOTQ3MzIgMTMuMTk5NiA2LjQ2NTc0IDEyLjk1NSA3LjEyOTc5VjEyLjc1NjdIMTEuNDE3MlYzLjYzNDhIMTIuODUwMVY1Ljc0OTI3QzEzLjE2NDcgNS4xMjAxNyAxMy41NzgyIDQuNjEzMzkgMTQuMDkwOCA0LjIyODk0QzE0LjYxNTEgMy44MzI4NSAxNS4xNjI2IDMuNjExNSAxNS43MzM1IDMuNTY0OUMxNS44NSAzLjU2NDkgMTUuOTQ5IDMuNTY0OSAxNi4wMzA2IDMuNTY0OUMxNi4xMTIxIDMuNTY0OSAxNi4xODIgMy41NzA3MiAxNi4yNDAzIDMuNTgyMzdWNC45ODAzN1oiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNy4zMTExIDEwLjExOEMxNy4zMTExIDkuNTM1NTEgMTcuNDc0MiA5LjAzNDU2IDE3LjgwMDQgOC42MTUxNkMxOC4xMzgzIDguMTg0MTEgMTguNTk4NSA3Ljg1MjA5IDE5LjE4MSA3LjYxOTA5QzE5Ljc2MzUgNy4zODYwOSAyMC40MzkyIDcuMjY5NTkgMjEuMjA4MSA3LjI2OTU5QzIxLjYxNTggNy4yNjk1OSAyMi4wNDY5IDcuMzA0NTQgMjIuNTAxMiA3LjM3NDQ0QzIyLjk1NTYgNy40MzI2OSAyMy4zNTc1IDcuNTI1ODkgMjMuNzA3IDcuNjU0MDRWNi45ODk5OUMyMy43MDcgNi4yOTA5OSAyMy40OTczIDUuNzQzNDQgMjMuMDc3OSA1LjM0NzM0QzIyLjY1ODUgNC45Mzk1OSAyMi4wNjQzIDQuNzM1NzIgMjEuMjk1NCA0LjczNTcyQzIwLjc5NDUgNC43MzU3MiAyMC4zMTEgNC44Mjg5MiAxOS44NDUgNS4wMTUzMkMxOS4zOTA3IDUuMTkwMDcgMTguOTA3MiA1LjQ0NjM3IDE4LjM5NDYgNS43ODQyMkwxNy44MzU0IDQuNzAwNzdDMTguNDI5NSA0LjI5MzAyIDE5LjAyMzcgMy45OTAxMiAxOS42MTc4IDMuNzkyMDdDMjAuMjEyIDMuNTgyMzcgMjAuODI5NCAzLjQ3NzUyIDIxLjQ3MDIgMy40Nzc1MkMyMi42MzUyIDMuNDc3NTIgMjMuNTU1NSAzLjgwMzcyIDI0LjIzMTIgNC40NTYxMkMyNC45MDY5IDUuMDk2ODcgMjUuMjQ0OCA1Ljk5MzkyIDI1LjI0NDggNy4xNDcyN1YxMS4wMDkyQzI1LjI0NDggMTEuMTk1NiAyNS4yNzk3IDExLjMzNTQgMjUuMzQ5NiAxMS40Mjg2QzI1LjQzMTIgMTEuNTEwMiAyNS41NTkzIDExLjU1NjggMjUuNzM0MSAxMS41Njg0VjEyLjc1NjdDMjUuNTgyNiAxMi43OCAyNS40NDg3IDEyLjc5NzUgMjUuMzMyMiAxMi44MDkyQzI1LjIyNzMgMTIuODIwOCAyNS4xMzk5IDEyLjgyNjYgMjUuMDcgMTIuODI2NkMyNC43MDg5IDEyLjgyNjYgMjQuNDM1MSAxMi43Mjc2IDI0LjI0ODcgMTIuNTI5NkMyNC4wNzQgMTIuMzMxNSAyMy45NzQ5IDEyLjEyMTggMjMuOTUxNiAxMS45MDA1TDIzLjkxNjcgMTEuMzIzOEMyMy41MjA2IDExLjgzNjQgMjMuMDAyMiAxMi4yMzI1IDIyLjM2MTQgMTIuNTEyMUMyMS43MjA3IDEyLjc5MTcgMjEuMDg1NyAxMi45MzE1IDIwLjQ1NjYgMTIuOTMxNUMxOS44NTA4IDEyLjkzMTUgMTkuMzA5MSAxMi44MDkyIDE4LjgzMTUgMTIuNTY0NUMxOC4zNTM4IDEyLjMwODIgMTcuOTgxIDExLjk3MDQgMTcuNzEzMSAxMS41NTFDMTcuNDQ1MSAxMS4xMTk5IDE3LjMxMTEgMTAuNjQyMyAxNy4zMTExIDEwLjExOFpNMjMuMjUyNiAxMC43NjQ2QzIzLjM5MjQgMTAuNjAxNSAyMy41MDMxIDEwLjQzODQgMjMuNTg0NyAxMC4yNzUzQzIzLjY2NjIgMTAuMTAwNSAyMy43MDcgOS45NTQ5MSAyMy43MDcgOS44Mzg0MVY4LjcwMjU0QzIzLjM0NTggOC41NjI3NCAyMi45NjcyIDguNDU3ODkgMjIuNTcxMSA4LjM4Nzk5QzIyLjE3NSA4LjMwNjQ0IDIxLjc4NDcgOC4yNjU2NyAyMS40MDAzIDguMjY1NjdDMjAuNjE5NyA4LjI2NTY3IDE5Ljk4NDggOC40MjI5NCAxOS40OTU1IDguNzM3NDlDMTkuMDE3OSA5LjA0MDM5IDE4Ljc3OSA5LjQ1OTc5IDE4Ljc3OSA5Ljk5NTY5QzE4Ljc3OSAxMC4yODY5IDE4Ljg1NDggMTAuNTcyNCAxOS4wMDYyIDEwLjg1MkMxOS4xNjkzIDExLjExOTkgMTkuNDAyMyAxMS4zNDEzIDE5LjcwNTIgMTEuNTE2QzIwLjAxOTggMTEuNjkwOCAyMC40MDQyIDExLjc3ODEgMjAuODU4NiAxMS43NzgxQzIxLjMzNjIgMTEuNzc4MSAyMS43OTA2IDExLjY4NDkgMjIuMjIxNiAxMS40OTg1QzIyLjY1MjcgMTEuMzAwNSAyMi45OTYzIDExLjA1NTggMjMuMjUyNiAxMC43NjQ2WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTI2Ljc5NSAxNi4wMDcxQzI2LjM5ODkgMTYuMDA3MSAyNi4wMjAzIDE1Ljk0ODggMjUuNjU5MSAxNS44MzIzQzI1LjI5OCAxNS43MTU4IDI0Ljk3NzYgMTUuNTI5NCAyNC42OTggMTUuMjczMUwyNS40MTQ1IDE0LjI0MjFDMjUuNTc3NiAxNC4zOTM2IDI1Ljc2OTggMTQuNDk4NCAyNS45OTEyIDE0LjU1NjdDMjYuMjAwOSAxNC42MTQ5IDI2LjQxMDYgMTQuNjQ0IDI2LjYyMDMgMTQuNjQ0QzI2Ljg3NjYgMTQuNjQ0IDI3LjExNTQgMTQuNTggMjcuMzM2NyAxNC40NTE4QzI3LjU1ODEgMTQuMzIzNyAyNy43Mzg3IDE0LjE0MzEgMjcuODc4NSAxMy45MTAxQzI4LjAxODMgMTMuNjg4NyAyOC4wODgyIDEzLjQzODMgMjguMDg4MiAxMy4xNTg3VjMuNjM0OEgyOS42MjZWMTMuMDUzOEMyOS42MjYgMTMuNjI0NyAyOS40OTIgMTQuMTMxNCAyOS4yMjQgMTQuNTc0MUMyOC45NTYxIDE1LjAyODUgMjguNjA2NiAxNS4zNzggMjguMTc1NSAxNS42MjI2QzI3Ljc1NjEgMTUuODc4OSAyNy4yOTYgMTYuMDA3MSAyNi43OTUgMTYuMDA3MVpNMjguMDg4MiAxLjkyMjI1VjBIMjkuNjI2VjEuOTIyMjVIMjguMDg4MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0zNi4zNTkxIDEyLjkzMTVDMzUuNjcxOCAxMi45MzE1IDM1LjA0ODUgMTIuODA5MiAzNC40ODkzIDEyLjU2NDVDMzMuOTMwMSAxMi4zMDgyIDMzLjQ0NjcgMTEuOTY0NSAzMy4wMzg5IDExLjUzMzVDMzIuNjMxMiAxMS4wOTA4IDMyLjMxNjYgMTAuNTg0IDMyLjA5NTMgMTAuMDEzMkMzMS44NzM5IDkuNDQyMzEgMzEuNzYzMiA4Ljg0MjM0IDMxLjc2MzIgOC4yMTMyNEMzMS43NjMyIDcuNTcyNDkgMzEuODczOSA2Ljk2NjY5IDMyLjA5NTMgNi4zOTU4NEMzMi4zMTY2IDUuODI0OTkgMzIuNjMxMiA1LjMyNDA0IDMzLjAzODkgNC44OTI5OUMzMy40NDY3IDQuNDUwMjkgMzMuOTMwMSA0LjEwNjYyIDM0LjQ4OTMgMy44NjE5N0MzNS4wNjAyIDMuNjA1NjcgMzUuNjgzNCAzLjQ3NzUyIDM2LjM1OTEgMy40Nzc1MkMzNy4wNDY1IDMuNDc3NTIgMzcuNjY5OCAzLjYwNTY3IDM4LjIyOSAzLjg2MTk3QzM4Ljc4ODIgNC4xMDY2MiAzOS4yNzE2IDQuNDUwMjkgMzkuNjc5NCA0Ljg5Mjk5QzQwLjA5ODggNS4zMjQwNCA0MC40MTkyIDUuODI0OTkgNDAuNjQwNSA2LjM5NTg0QzQwLjg2MTkgNi45NjY2OSA0MC45NzI1IDcuNTcyNDkgNDAuOTcyNSA4LjIxMzI0QzQwLjk3MjUgOC44NDIzNCA0MC44NjE5IDkuNDQyMzEgNDAuNjQwNSAxMC4wMTMyQzQwLjQxOTIgMTAuNTg0IDQwLjEwNDYgMTEuMDkwOCAzOS42OTY5IDExLjUzMzVDMzkuMjg5MSAxMS45NjQ1IDM4Ljc5OTggMTIuMzA4MiAzOC4yMjkgMTIuNTY0NUMzNy42Njk4IDEyLjgwOTIgMzcuMDQ2NSAxMi45MzE1IDM2LjM1OTEgMTIuOTMxNVpNMzMuMzM2IDguMjMwNzFDMzMuMzM2IDguODU5ODEgMzMuNDcgOS40MzA2NiAzMy43Mzc5IDkuOTQzMjZDMzQuMDE3NSAxMC40NTU5IDM0LjM4NDUgMTAuODYzNiAzNC44Mzg4IDExLjE2NjVDMzUuMjkzMiAxMS40NTc4IDM1Ljc5OTkgMTEuNjAzNCAzNi4zNTkxIDExLjYwMzRDMzYuOTE4MyAxMS42MDM0IDM3LjQyNTEgMTEuNDUxOSAzNy44Nzk1IDExLjE0OUMzOC4zNDU1IDEwLjg0NjEgMzguNzEyNCAxMC40Mzg0IDM4Ljk4MDQgOS45MjU3OUMzOS4yNiA5LjQwMTU0IDM5LjM5OTggOC44MjQ4NiAzOS4zOTk4IDguMTk1NzdDMzkuMzk5OCA3LjU2NjY3IDM5LjI2IDYuOTk1ODIgMzguOTgwNCA2LjQ4MzIyQzM4LjcxMjQgNS45NzA2MiAzOC4zNDU1IDUuNTYyODcgMzcuODc5NSA1LjI1OTk3QzM3LjQyNTEgNC45NTcwNyAzNi45MTgzIDQuODA1NjIgMzYuMzU5MSA0LjgwNTYyQzM1Ljc5OTkgNC44MDU2MiAzNS4yOTMyIDQuOTYyODkgMzQuODM4OCA1LjI3NzQ0QzM0LjM4NDUgNS41ODAzNCAzNC4wMTc1IDUuOTg4MDkgMzMuNzM3OSA2LjUwMDY5QzMzLjQ3IDcuMDEzMjkgMzMuMzM2IDcuNTg5OTcgMzMuMzM2IDguMjMwNzFaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNNTQuMjE5NSAzLjYzNDhINTUuNzA0OUw1MS44MjU1IDEyLjc1NjdINTAuNDc5OUw0OC43MTQ5IDguNDU3ODlMNDYuOTY3NCAxMi43NTY3SDQ1LjYyMThMNDEuNzQyNCAzLjYzNDhINDMuMjEwM0w0Ni4zNTU4IDExLjIzNjRMNDcuODIzNyA3LjQ5Njc3TDQ2LjI4NTkgMy42NTIyN0g0Ny42MzE1TDQ4LjcxNDkgNi41NTMxMkw0OS43OTg0IDMuNjUyMjdINTEuMTQzOUw0OS42MjM2IDcuNDk2NzdMNTEuMDkxNSAxMS4yMzY0TDU0LjIxOTUgMy42MzQ4WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTU3LjgyNDQgMTUuMjM4MkM1Ny45NzU5IDE1LjI0OTggNTguMTI3MyAxNS4yNjE1IDU4LjI3ODggMTUuMjczMUM1OC40MzAyIDE1LjI5NjQgNTguNTQ2NyAxNS4zMDgxIDU4LjYyODMgMTUuMzA4MUM1OC44MTQ3IDE1LjMwODEgNTguOTc3OCAxNS4yNDQgNTkuMTE3NiAxNS4xMTU5QzU5LjI1NzQgMTQuOTg3NyA1OS40MDg4IDE0LjczNzIgNTkuNTcxOSAxNC4zNjQ0QzU5Ljc0NjcgMTQuMDAzMyA1OS45NjggMTMuNDY3NCA2MC4yMzYgMTIuNzU2N0w1Ni4zNzQgMy42MzQ4SDU3Ljk5OTJMNjEuMDc0OCAxMS4yMDE1TDYzLjg1MzMgMy42MzQ4SDY1LjM3MzZMNjAuOTM1IDE1LjE1MDhDNjAuODMwMSAxNS40MTg4IDYwLjY3MjggMTUuNjY5MiA2MC40NjMxIDE1LjkwMjJDNjAuMjY1MSAxNi4xNDY5IDYwLjAwODggMTYuMzM5MSA1OS42OTQyIDE2LjQ3ODlDNTkuMzc5NyAxNi42MTg3IDU5LjAwMTEgMTYuNjg4NiA1OC41NTg0IDE2LjY4ODZDNTguNDUzNSAxNi42ODg2IDU4LjM0MjggMTYuNjgyOCA1OC4yMjYzIDE2LjY3MTFDNTguMTIxNSAxNi42NTk1IDU3Ljk4NzUgMTYuNjM2MiA1Ny44MjQ0IDE2LjYwMTJWMTUuMjM4MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik03OC45MjU2IDIuOTUzMjdDNzguNzg1OCAyLjc5MDE3IDc4LjU5OTQgMi42MzI5IDc4LjM2NjQgMi40ODE0NUM3OC4xMzM0IDIuMzMgNzcuODcxMyAyLjE5NjAyIDc3LjU4IDIuMDc5NTJDNzcuMjg4OCAxLjk1MTM3IDc2Ljk2ODQgMS44NTIzNSA3Ni42MTg5IDEuNzgyNDVDNzYuMjgxMSAxLjcwMDkgNzUuOTI1NyAxLjY2MDEyIDc1LjU1MjkgMS42NjAxMkM3NC41OTc2IDEuNjYwMTIgNzMuODkyOCAxLjg0MDcgNzMuNDM4NSAyLjIwMTg1QzcyLjk4NDEgMi41NjMgNzIuNzU2OSAzLjA1ODEyIDcyLjc1NjkgMy42ODcyMkM3Mi43NTY5IDQuMTI5OTIgNzIuODczNCA0LjQ3OTQyIDczLjEwNjQgNC43MzU3MkM3My4zMzk0IDQuOTkyMDIgNzMuNjk0OCA1LjIwMTcyIDc0LjE3MjQgNS4zNjQ4MkM3NC42NjE3IDUuNTI3OTIgNzUuMjc5MiA1LjY5Njg0IDc2LjAyNDcgNS44NzE1OUM3Ni44ODY4IDYuMDU3OTkgNzcuNjMyNSA2LjI4NTE3IDc4LjI2MTYgNi41NTMxMkM3OC44OTA2IDYuODIxMDcgNzkuMzc0MSA3LjE4MjIyIDc5LjcxMiA3LjYzNjU3QzgwLjA0OTggOC4wNzkyNiA4MC4yMTg4IDguNjczNDEgODAuMjE4OCA5LjQxOTAxQzgwLjIxODggMTAuMDEzMiA4MC4xMDIyIDEwLjUzMTYgNzkuODY5MiAxMC45NzQzQzc5LjY0NzkgMTEuNDA1MyA3OS4zMzMzIDExLjc2NjUgNzguOTI1NiAxMi4wNTc3Qzc4LjUxNzggMTIuMzM3MyA3OC4wNDAyIDEyLjU0NyA3Ny40OTI3IDEyLjY4NjhDNzYuOTQ1MSAxMi44MTUgNzYuMzUxIDEyLjg3OTEgNzUuNzEwMiAxMi44NzkxQzc1LjA4MTEgMTIuODc5MSA3NC40NjM2IDEyLjgxNSA3My44NTc4IDEyLjY4NjhDNzMuMjYzNyAxMi41NDcgNzIuNjk4NyAxMi4zNDkgNzIuMTYyOCAxMi4wOTI3QzcxLjYyNjkgMTEuODM2NCA3MS4xMjU5IDExLjUxNiA3MC42NTk5IDExLjEzMTZMNzEuNDExNCA5LjgwMzQ2QzcxLjU5NzggMTAuMDAxNSA3MS44MzY2IDEwLjE5OTYgNzIuMTI3OCAxMC4zOTc2QzcyLjQzMDcgMTAuNTg0IDcyLjc2ODYgMTAuNzU4OCA3My4xNDE0IDEwLjkyMTlDNzMuNTI1OCAxMS4wODUgNzMuOTM5NCAxMS4yMTg5IDc0LjM4MjEgMTEuMzIzOEM3NC44MjQ4IDExLjQxNyA3NS4yNzkyIDExLjQ2MzYgNzUuNzQ1MiAxMS40NjM2Qzc2LjYzMDYgMTEuNDYzNiA3Ny4zMTc5IDExLjMwNjMgNzcuODA3MiAxMC45OTE4Qzc4LjI5NjUgMTAuNjY1NiA3OC41NDEyIDEwLjE5MzcgNzguNTQxMiA5LjU3NjI5Qzc4LjU0MTIgOS4xMTAyOSA3OC40MDEzIDguNzM3NDkgNzguMTIxNyA4LjQ1Nzg5Qzc3Ljg1MzggOC4xNzgyOSA3Ny40NTE5IDcuOTQ1MjkgNzYuOTE2IDcuNzU4ODlDNzYuMzgwMSA3LjU3MjQ5IDc1LjcyNzcgNy4zODYwOSA3NC45NTg4IDcuMTk5NjlDNzQuMTIgNi45ODk5OSA3My40MTUyIDYuNzYyODIgNzIuODQ0MyA2LjUxODE3QzcyLjI3MzUgNi4yNjE4NyA3MS44NDI0IDUuOTI5ODQgNzEuNTUxMiA1LjUyMjA5QzcxLjI3MTYgNS4xMTQzNCA3MS4xMzE4IDQuNTg0MjcgNzEuMTMxOCAzLjkzMTg3QzcxLjEzMTggMy4xMzk2NyA3MS4zMjQgMi40Njk4IDcxLjcwODQgMS45MjIyNUM3Mi4wOTI5IDEuMzc0NyA3Mi42MjMgMC45NjExMjMgNzMuMjk4NyAwLjY4MTUyNEM3My45NzQ0IDAuNDAxOTI0IDc0LjczNzQgMC4yNjIxMjUgNzUuNTg3OSAwLjI2MjEyNUM3Ni4xNDcxIDAuMjYyMTI1IDc2LjY2NTUgMC4zMjAzNzQgNzcuMTQzMiAwLjQzNjg3NEM3Ny42MzI1IDAuNTUzMzc0IDc4LjA4NjggMC43MTY0NzQgNzguNTA2MiAwLjkyNjE3M0M3OC45MjU2IDEuMTM1ODcgNzkuMzEgMS4zODYzNSA3OS42NTk1IDEuNjc3Nkw3OC45MjU2IDIuOTUzMjdaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNODIuNDM0MSAxNS4yMzgyQzgyLjU4NTYgMTUuMjQ5OCA4Mi43MzcgMTUuMjYxNSA4Mi44ODg1IDE1LjI3MzFDODMuMDM5OSAxNS4yOTY0IDgzLjE1NjQgMTUuMzA4MSA4My4yMzggMTUuMzA4MUM4My40MjQ0IDE1LjMwODEgODMuNTg3NSAxNS4yNDQgODMuNzI3MyAxNS4xMTU5QzgzLjg2NzEgMTQuOTg3NyA4NC4wMTg1IDE0LjczNzIgODQuMTgxNiAxNC4zNjQ0Qzg0LjM1NjQgMTQuMDAzMyA4NC41Nzc3IDEzLjQ2NzQgODQuODQ1NyAxMi43NTY3TDgwLjk4MzcgMy42MzQ4SDgyLjYwODlMODUuNjg0NSAxMS4yMDE1TDg4LjQ2MyAzLjYzNDhIODkuOTgzM0w4NS41NDQ3IDE1LjE1MDhDODUuNDM5OCAxNS40MTg4IDg1LjI4MjUgMTUuNjY5MiA4NS4wNzI4IDE1LjkwMjJDODQuODc0OCAxNi4xNDY5IDg0LjYxODUgMTYuMzM5MSA4NC4zMDM5IDE2LjQ3ODlDODMuOTg5NCAxNi42MTg3IDgzLjYxMDggMTYuNjg4NiA4My4xNjgxIDE2LjY4ODZDODMuMDYzMiAxNi42ODg2IDgyLjk1MjUgMTYuNjgyOCA4Mi44MzYgMTYuNjcxMUM4Mi43MzEyIDE2LjY1OTUgODIuNTk3MiAxNi42MzYyIDgyLjQzNDEgMTYuNjAxMlYxNS4yMzgyWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTk0LjY4ODQgMTIuOTMxNUM5My45MzEyIDEyLjkzMTUgOTMuMjIwNSAxMi44MDkyIDkyLjU1NjUgMTIuNTY0NUM5MS44OTI0IDEyLjMwODIgOTEuMzIxNiAxMS45Mjk2IDkwLjg0MzkgMTEuNDI4Nkw5MS40MzgxIDEwLjM0NTJDOTEuOTYyMyAxMC44MzQ1IDkyLjQ4NjYgMTEuMTg0IDkzLjAxMDggMTEuMzkzN0M5My41MzUxIDExLjYwMzQgOTQuMDcxIDExLjcwODIgOTQuNjE4NSAxMS43MDgyQzk1LjI0NzYgMTEuNzA4MiA5NS43NjAyIDExLjU5MTcgOTYuMTU2MyAxMS4zNTg3Qzk2LjU1MjQgMTEuMTE0MSA5Ni43NTA1IDEwLjc1ODggOTYuNzUwNSAxMC4yOTI4Qzk2Ljc1MDUgOS45NTQ5MSA5Ni42NDU2IDkuNzA0NDQgOTYuNDM1OSA5LjU0MTM0Qzk2LjIzNzkgOS4zNzgyNCA5NS45NTI1IDkuMjQ0MjYgOTUuNTc5NyA5LjEzOTQxQzk1LjIwNjkgOS4wMjI5MSA5NC43NjQyIDguODk0NzYgOTQuMjUxNiA4Ljc1NDk2QzkzLjYyMjUgOC41Njg1NiA5My4wOTI0IDguMzcwNTIgOTIuNjYxMyA4LjE2MDgyQzkyLjIzMDMgNy45NTExMiA5MS45MDQxIDcuNjg4OTkgOTEuNjgyNyA3LjM3NDQ0QzkxLjQ2MTQgNy4wNTk4OSA5MS4zNTA3IDYuNjYzNzkgOTEuMzUwNyA2LjE4NjE0QzkxLjM1MDcgNS42MDM2NCA5MS41MDIyIDUuMTE0MzQgOTEuODA1MSA0LjcxODI0QzkyLjEwOCA0LjMxMDQ5IDkyLjUyMTUgNC4wMDE3NyA5My4wNDU4IDMuNzkyMDdDOTMuNTgxNyAzLjU4MjM3IDk0LjE4NzUgMy40Nzc1MiA5NC44NjMyIDMuNDc3NTJDOTUuNTM4OSAzLjQ3NzUyIDk2LjE1MDUgMy41ODIzNyA5Ni42OTgxIDMuNzkyMDdDOTcuMjQ1NiA0LjAwMTc3IDk3LjcxNzQgNC4zMTA0OSA5OC4xMTM1IDQuNzE4MjRMOTcuNDE0NSA1Ljc4NDIyQzk3LjA1MzQgNS40MTE0MiA5Ni42NTczIDUuMTM3NjQgOTYuMjI2MiA0Ljk2Mjg5Qzk1Ljc5NTIgNC43NzY0OSA5NS4zMTE3IDQuNjgzMjkgOTQuNzc1OCA0LjY4MzI5Qzk0LjQ2MTMgNC42ODMyOSA5NC4xNTI1IDQuNzI0MDcgOTMuODQ5NiA0LjgwNTYyQzkzLjU0NjcgNC44NzU1MiA5My4yOTYzIDUuMDA5NDkgOTMuMDk4MiA1LjIwNzU0QzkyLjkwMDIgNS4zOTM5NCA5Mi44MDExIDUuNjYxODkgOTIuODAxMSA2LjAxMTM5QzkyLjgwMTEgNi4zMDI2NCA5Mi44NzY5IDYuNTM1NjQgOTMuMDI4MyA2LjcxMDM5QzkzLjE5MTQgNi44NzM0OSA5My40MjQ0IDcuMDEzMjkgOTMuNzI3MyA3LjEyOTc5Qzk0LjA0MTkgNy4yNDYyOSA5NC40MjA1IDcuMzc0NDQgOTQuODYzMiA3LjUxNDI0Qzk1LjU1MDUgNy43MTIyOSA5Ni4xNDQ3IDcuOTEwMzQgOTYuNjQ1NiA4LjEwODM5Qzk3LjE1ODIgOC4zMDY0NCA5Ny41NTQzIDguNTYyNzQgOTcuODMzOSA4Ljg3NzI5Qzk4LjExMzUgOS4xOTE4NCA5OC4yNTMzIDkuNjI4NzEgOTguMjUzMyAxMC4xODc5Qzk4LjI1MzMgMTEuMDUgOTcuOTI3MSAxMS43MjU3IDk3LjI3NDcgMTIuMjE1Qzk2LjYyMjMgMTIuNjkyNyA5NS43NjAyIDEyLjkzMTUgOTQuNjg4NCAxMi45MzE1WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEwNS4wNzMgMTIuMzAyNEMxMDQuOTQ1IDEyLjM2MDYgMTA0Ljc3MSAxMi40MzY0IDEwNC41NDkgMTIuNTI5NkMxMDQuMzI4IDEyLjYyMjggMTA0LjA3MiAxMi43MDQzIDEwMy43OCAxMi43NzQyQzEwMy40ODkgMTIuODQ0MSAxMDMuMTggMTIuODc5MSAxMDIuODU0IDEyLjg3OTFDMTAyLjQ4MSAxMi44NzkxIDEwMi4xMzggMTIuODE1IDEwMS44MjMgMTIuNjg2OEMxMDEuNTA5IDEyLjU0NyAxMDEuMjU4IDEyLjMzNzMgMTAxLjA3MiAxMi4wNTc3QzEwMC44ODUgMTEuNzY2NSAxMDAuNzkyIDExLjQwNTMgMTAwLjc5MiAxMC45NzQzVjQuODQwNTdIOTkuNTUxNFYzLjYzNDhIMTAwLjc5MlYwLjU5NDE0OUgxMDIuMzNWMy42MzQ4SDEwNC4zNzRWNC44NDA1N0gxMDIuMzNWMTAuNTAyNUMxMDIuMzUzIDEwLjgyODcgMTAyLjQ2NCAxMS4wNzMzIDEwMi42NjIgMTEuMjM2NEMxMDIuODYgMTEuMzg3OSAxMDMuMDkzIDExLjQ2MzYgMTAzLjM2MSAxMS40NjM2QzEwMy42NjQgMTEuNDYzNiAxMDMuOTQzIDExLjQxMTIgMTA0LjIgMTEuMzA2M0MxMDQuNDU2IDExLjIwMTUgMTA0LjYyNSAxMS4xMjU3IDEwNC43MDcgMTEuMDc5MUwxMDUuMDczIDEyLjMwMjRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTEwLjY3OCAxMi45MzE1QzEwOS45OTEgMTIuOTMxNSAxMDkuMzYyIDEyLjgwOTIgMTA4Ljc5MSAxMi41NjQ1QzEwOC4yMzIgMTIuMzA4MiAxMDcuNzQyIDExLjk2NDUgMTA3LjMyMyAxMS41MzM1QzEwNi45MTUgMTEuMDkwOCAxMDYuNTk1IDEwLjU4NCAxMDYuMzYyIDEwLjAxMzJDMTA2LjE0MSA5LjQ0MjMxIDEwNi4wMyA4LjgzNjUxIDEwNi4wMyA4LjE5NTc3QzEwNi4wMyA3LjMzMzY3IDEwNi4yMjggNi41NDcyOSAxMDYuNjI0IDUuODM2NjRDMTA3LjAyIDUuMTI1OTkgMTA3LjU2OCA0LjU1NTE0IDEwOC4yNjcgNC4xMjQxQzEwOC45NzcgMy42OTMwNSAxMDkuNzg3IDMuNDc3NTIgMTEwLjY5NiAzLjQ3NzUyQzExMS42MTYgMy40Nzc1MiAxMTIuNDE0IDMuNjk4ODcgMTEzLjA5IDQuMTQxNTdDMTEzLjc3NyA0LjU3MjYyIDExNC4zMDcgNS4xNDM0NyAxMTQuNjggNS44NTQxMkMxMTUuMDY0IDYuNTUzMTIgMTE1LjI1NyA3LjMxMDM3IDExNS4yNTcgOC4xMjU4NkMxMTUuMjU3IDguMjQyMzYgMTE1LjI1MSA4LjM1ODg2IDExNS4yMzkgOC40NzUzNkMxMTUuMjM5IDguNTgwMjEgMTE1LjIzMyA4LjY2MTc2IDExNS4yMjIgOC43MjAwMUgxMDcuNjU1QzEwNy43MDIgOS4zMTQxNiAxMDcuODY1IDkuODQ0MjQgMTA4LjE0NCAxMC4zMTAyQzEwOC40MzYgMTAuNzY0NiAxMDguODA4IDExLjEyNTcgMTA5LjI2MyAxMS4zOTM3QzEwOS43MTcgMTEuNjUgMTEwLjIwNiAxMS43NzgxIDExMC43MzEgMTEuNzc4MUMxMTEuMjkgMTEuNzc4MSAxMTEuODE0IDExLjYzODMgMTEyLjMwMyAxMS4zNTg3QzExMi44MDQgMTEuMDc5MSAxMTMuMTQ4IDEwLjcxMjIgMTEzLjMzNCAxMC4yNTc4TDExNC42NjIgMTAuNjI0OEMxMTQuNDY0IDExLjA2NzUgMTE0LjE2NyAxMS40NjM2IDExMy43NzEgMTEuODEzMUMxMTMuMzg3IDEyLjE2MjYgMTEyLjkyNyAxMi40MzY0IDExMi4zOTEgMTIuNjM0NEMxMTEuODY2IDEyLjgzMjUgMTExLjI5NiAxMi45MzE1IDExMC42NzggMTIuOTMxNVpNMTA3LjYwMyA3LjY1NDA0SDExMy44MjRDMTEzLjc3NyA3LjA1OTg5IDExMy42MDggNi41MzU2NCAxMTMuMzE3IDYuMDgxMjlDMTEzLjAyNiA1LjYyNjk0IDExMi42NTMgNS4yNzE2MiAxMTIuMTk5IDUuMDE1MzJDMTExLjc0NCA0Ljc1OTAyIDExMS4yNDMgNC42MzA4NyAxMTAuNjk2IDQuNjMwODdDMTEwLjE2IDQuNjMwODcgMTA5LjY2NSA0Ljc1OTAyIDEwOS4yMSA1LjAxNTMyQzEwOC43NTYgNS4yNzE2MiAxMDguMzgzIDUuNjI2OTQgMTA4LjA5MiA2LjA4MTI5QzEwNy44MTIgNi41MzU2NCAxMDcuNjQ5IDcuMDU5ODkgMTA3LjYwMyA3LjY1NDA0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEzMC45ODEgMTIuNzU2N0gxMjkuNDQzVjcuNjU0MDRDMTI5LjQ0MyA2LjY5ODc0IDEyOS4yODYgNS45OTM5MiAxMjguOTcxIDUuNTM5NTdDMTI4LjY2OCA1LjA4NTIyIDEyOC4yMTQgNC44NTgwNCAxMjcuNjA4IDQuODU4MDRDMTI2Ljk5MSA0Ljg1ODA0IDEyNi40MzIgNS4wODUyMiAxMjUuOTMxIDUuNTM5NTdDMTI1LjQzIDUuOTgyMjcgMTI1LjA3NCA2LjU1ODk0IDEyNC44NjUgNy4yNjk1OVYxMi43NTY3SDEyMy4zMjdWNy42NTQwNEMxMjMuMzI3IDYuNjg3MDkgMTIzLjE3NSA1Ljk4MjI3IDEyMi44NzMgNS41Mzk1N0MxMjIuNTcgNS4wODUyMiAxMjIuMTE1IDQuODU4MDQgMTIxLjUxIDQuODU4MDRDMTIwLjkwNCA0Ljg1ODA0IDEyMC4zNDUgNS4wNzkzOSAxMTkuODMyIDUuNTIyMDlDMTE5LjMzMSA1Ljk1MzE0IDExOC45NzYgNi41Mjk4MiAxMTguNzY2IDcuMjUyMTJWMTIuNzU2N0gxMTcuMjI4VjMuNjM0OEgxMTguNjI2VjUuNTkxOTlDMTE4Ljk5OSA0LjkxNjI5IDExOS40ODIgNC4zOTc4NyAxMjAuMDc3IDQuMDM2NzJDMTIwLjY3MSAzLjY2MzkyIDEyMS4zNDEgMy40Nzc1MiAxMjIuMDg2IDMuNDc3NTJDMTIyLjg0MyAzLjQ3NzUyIDEyMy40NDkgMy42ODcyMiAxMjMuOTA0IDQuMTA2NjJDMTI0LjM1OCA0LjUxNDM3IDEyNC42MzggNS4wNDQ0NCAxMjQuNzQyIDUuNjk2ODRDMTI1LjE1IDQuOTc0NTQgMTI1LjY0NSA0LjQyNjk5IDEyNi4yMjggNC4wNTQxOUMxMjYuODEgMy42Njk3NSAxMjcuNDc0IDMuNDc3NTIgMTI4LjIyIDMuNDc3NTJDMTI4Ljc0NCAzLjQ3NzUyIDEyOS4xODEgMy41NzY1NSAxMjkuNTMxIDMuNzc0NkMxMjkuODkyIDMuOTYwOTkgMTMwLjE3NyA0LjIyODk0IDEzMC4zODcgNC41Nzg0NEMxMzAuNTk3IDQuOTE2MjkgMTMwLjc0OCA1LjMxODIyIDEzMC44NDEgNS43ODQyMkMxMzAuOTM0IDYuMjUwMjIgMTMwLjk4MSA2Ljc1Njk5IDEzMC45ODEgNy4zMDQ1NFYxMi43NTY3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE0OC44MjggOS4yMDkzMVY2LjY5MjkySDE1NC4yMVY5LjIwOTMxSDE0OC44MjhaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTU2LjYwNCAxMi43NTY3VjAuMzQ5NDk5SDE2NS4wMjdWMi44NjU5SDE1OS40N1Y1LjUzOTU3SDE2NC4wNDlWNy44NjM3NEgxNTkuNDdWMTIuNzU2N0gxNTYuNjA0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE2NS4zOCAxMC4wMTMyQzE2NS4zOCA5LjQwNzM2IDE2NS41NDkgOC44NzcyOSAxNjUuODg3IDguNDIyOTRDMTY2LjIyNSA3Ljk2ODU5IDE2Ni42OTEgNy42MTMyNyAxNjcuMjg1IDcuMzU2OTdDMTY3Ljg3OSA3LjA4OTAyIDE2OC41NjEgNi45NTUwNCAxNjkuMzMgNi45NTUwNEMxNjkuNzAyIDYuOTU1MDQgMTcwLjA2OSA2Ljk4OTk5IDE3MC40MzEgNy4wNTk4OUMxNzAuNzkyIDcuMTE4MTQgMTcxLjEwNiA3LjIwNTUyIDE3MS4zNzQgNy4zMjIwMlY2LjkyMDA5QzE3MS4zNzQgNi40MTkxNCAxNzEuMjIzIDYuMDM0NjkgMTcwLjkyIDUuNzY2NzRDMTcwLjYxNyA1LjQ5ODc5IDE3MC4xNTcgNS4zNjQ4MiAxNjkuNTM5IDUuMzY0ODJDMTY5LjAyNyA1LjM2NDgyIDE2OC41NDMgNS40NTIxOSAxNjguMDg5IDUuNjI2OTRDMTY3LjY0NiA1LjgwMTY5IDE2Ny4xNzQgNi4wNTIxNyAxNjYuNjczIDYuMzc4MzdMMTY1LjgzNSA0LjU5NTkyQzE2Ni40NCA0LjE5OTgyIDE2Ny4wNyAzLjkwMjc0IDE2Ny43MjIgMy43MDQ3QzE2OC4zODYgMy41MDY2NSAxNjkuMDg1IDMuNDA3NjIgMTY5LjgxOSAzLjQwNzYyQzE3MS4xOTQgMy40MDc2MiAxNzIuMjYgMy43Mzk2NSAxNzMuMDE3IDQuNDAzNjlDMTczLjc4NiA1LjA1NjA5IDE3NC4xNyA2LjAwNTU3IDE3NC4xNyA3LjI1MjEyVjkuNjQ2MTlDMTc0LjE3IDkuOTI1NzkgMTc0LjIxMSAxMC4xMjM4IDE3NC4yOTMgMTAuMjQwM0MxNzQuMzg2IDEwLjM0NTIgMTc0LjU0MyAxMC40MDkzIDE3NC43NjQgMTAuNDMyNlYxMi43NTY3QzE3NC41MzEgMTIuODAzMyAxNzQuMzEgMTIuODM4MyAxNzQuMSAxMi44NjE2QzE3My45MDIgMTIuODg0OSAxNzMuNzI4IDEyLjg5NjUgMTczLjU3NiAxMi44OTY1QzE3My4wNTIgMTIuODk2NSAxNzIuNjUgMTIuNzkxNyAxNzIuMzcgMTIuNTgyQzE3Mi4xMDIgMTIuMzcyMyAxNzEuOTMzIDEyLjA4NjkgMTcxLjg2NCAxMS43MjU3TDE3MS44MTEgMTEuMzIzOEMxNzEuNDAzIDExLjg0OCAxNzAuOTE0IDEyLjI1IDE3MC4zNDMgMTIuNTI5NkMxNjkuNzg0IDEyLjc5NzUgMTY5LjE5NiAxMi45MzE1IDE2OC41NzggMTIuOTMxNUMxNjcuOTcyIDEyLjkzMTUgMTY3LjQyNSAxMi44MDMzIDE2Ni45MzYgMTIuNTQ3QzE2Ni40NTggMTIuMjkwNyAxNjYuMDc5IDExLjk0MTIgMTY1LjggMTEuNDk4NUMxNjUuNTIgMTEuMDU1OCAxNjUuMzggMTAuNTYwNyAxNjUuMzggMTAuMDEzMlpNMTcwLjkzNyAxMC4zNjI3QzE3MS4wNjYgMTAuMjU3OCAxNzEuMTcgMTAuMTQxMyAxNzEuMjUyIDEwLjAxMzJDMTcxLjMzMyA5Ljg4NTAxIDE3MS4zNzQgOS43NjI2OSAxNzEuMzc0IDkuNjQ2MTlWOC44MjQ4NkMxNzEuMTQxIDguNzMxNjYgMTcwLjg3OSA4LjY2MTc2IDE3MC41ODggOC42MTUxNkMxNzAuMzA4IDguNTU2OTEgMTcwLjA0NiA4LjUyNzc5IDE2OS44MDEgOC41Mjc3OUMxNjkuMjg5IDguNTI3NzkgMTY4Ljg2NCA4LjY0NDI5IDE2OC41MjYgOC44NzcyOUMxNjguMTg4IDkuMDk4NjQgMTY4LjAxOSA5LjM5NTcxIDE2OC4wMTkgOS43Njg1MUMxNjguMDE5IDkuOTc4MjEgMTY4LjA3NyAxMC4xNzA0IDE2OC4xOTQgMTAuMzQ1MkMxNjguMzEgMTAuNTE5OSAxNjguNDY4IDEwLjY1OTcgMTY4LjY2NiAxMC43NjQ2QzE2OC44NzUgMTAuODY5NCAxNjkuMTIgMTAuOTIxOSAxNjkuNCAxMC45MjE5QzE2OS42NzkgMTAuOTIxOSAxNjkuOTU5IDEwLjg2OTQgMTcwLjIzOCAxMC43NjQ2QzE3MC41MTggMTAuNjU5NyAxNzAuNzUxIDEwLjUyNTggMTcwLjkzNyAxMC4zNjI3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE4Mi42MjcgMTIuNzU2N0wxODAuMjMzIDkuMDg2OTlMMTc5LjI1NCAxMC4wODMxVjEyLjc1NjdIMTc2LjQ1OFYwSDE3OS4yNTRWNy4zNzQ0NEwxODIuMzY1IDMuNTgyMzdIMTg1LjMxOEwxODIuMDE1IDcuNTMxNzFMMTg1LjU5OCAxMi43NTY3SDE4Mi42MjdaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTkyLjYxMSAxMi4yNjc0QzE5Mi4zNTUgMTIuMzcyMyAxOTIuMDY5IDEyLjQ3NzEgMTkxLjc1NSAxMi41ODJDMTkxLjQ1MiAxMi42ODY4IDE5MS4xMzIgMTIuNzY4NCAxOTAuNzk0IDEyLjgyNjZDMTkwLjQ1NiAxMi44OTY1IDE5MC4xMjQgMTIuOTMxNSAxODkuNzk4IDEyLjkzMTVDMTg5LjMzMiAxMi45MzE1IDE4OC45MDEgMTIuODU1OCAxODguNTA1IDEyLjcwNDNDMTg4LjEyIDEyLjU0MTIgMTg3LjgxMSAxMi4yNzkxIDE4Ny41NzggMTEuOTE3OUMxODcuMzU3IDExLjU1NjggMTg3LjI0NiAxMS4wNzkxIDE4Ny4yNDYgMTAuNDg1VjUuNjk2ODRIMTg2LjA3NVYzLjU4MjM3SDE4Ny4yNDZWMC42NjQwNDlIMTkwLjA0MlYzLjU4MjM3SDE5MS45MTJWNS42OTY4NEgxOTAuMDQyVjkuNTIzODZDMTkwLjA0MiA5LjgyNjc2IDE5MC4xMTggMTAuMDQ4MSAxOTAuMjY5IDEwLjE4NzlDMTkwLjQyMSAxMC4zMTYxIDE5MC42MTMgMTAuMzgwMSAxOTAuODQ2IDEwLjM4MDFDMTkxLjA0NCAxMC4zODAxIDE5MS4yNTQgMTAuMzQ1MiAxOTEuNDc1IDEwLjI3NTNDMTkxLjcwOCAxMC4yMDU0IDE5MS45MDYgMTAuMTI5NyAxOTIuMDY5IDEwLjA0ODFMMTkyLjYxMSAxMi4yNjc0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE5My44NzUgOS40NTM5NlYzLjU4MjM3SDE5Ni42NzFWOC44NDIzNEMxOTYuNjcxIDkuNDAxNTQgMTk2Ljc4MiA5LjgzMjU5IDE5Ny4wMDMgMTAuMTM1NUMxOTcuMjI1IDEwLjQyNjcgMTk3LjUzOSAxMC41NzI0IDE5Ny45NDcgMTAuNTcyNEMxOTguMjAzIDEwLjU3MjQgMTk4LjQ0OCAxMC41MzE2IDE5OC42ODEgMTAuNDVDMTk4LjkxNCAxMC4zNTY4IDE5OS4xNDEgMTAuMjExMiAxOTkuMzYyIDEwLjAxMzJDMTk5LjU4NCA5LjgxNTExIDE5OS43ODIgOS41NTg4MSAxOTkuOTU3IDkuMjQ0MjZWMy41ODIzN0gyMDIuNzUzVjkuNjQ2MTlDMjAyLjc1MyA5LjkyNTc5IDIwMi43OTMgMTAuMTIzOCAyMDIuODc1IDEwLjI0MDNDMjAyLjk2OCAxMC4zNDUyIDIwMy4xMjUgMTAuNDA5MyAyMDMuMzQ3IDEwLjQzMjZWMTIuNzU2N0MyMDMuMDkgMTIuODAzMyAyMDIuODYzIDEyLjgzODMgMjAyLjY2NSAxMi44NjE2QzIwMi40NzkgMTIuODg0OSAyMDIuMzEgMTIuODk2NSAyMDIuMTU4IDEyLjg5NjVDMjAxLjY2OSAxMi44OTY1IDIwMS4yNzkgMTIuNzk3NSAyMDAuOTg4IDEyLjU5OTVDMjAwLjY5NiAxMi4zODk4IDIwMC41MTYgMTIuMDk4NSAyMDAuNDQ2IDExLjcyNTdMMjAwLjM5NCAxMS4xNjY1QzE5OS45NzQgMTEuNzcyMyAxOTkuNDUgMTIuMjIwOCAxOTguODIxIDEyLjUxMjFDMTk4LjIwMyAxMi43OTE3IDE5Ny41MSAxMi45MzE1IDE5Ni43NDEgMTIuOTMxNUMxOTUuODA5IDEyLjkzMTUgMTk1LjA5OSAxMi42MzQ0IDE5NC42MDkgMTIuMDQwM0MxOTQuMTIgMTEuNDQ2MSAxOTMuODc1IDEwLjU4NCAxOTMuODc1IDkuNDUzOTZaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMjExIDUuOTc2NDRDMjEwLjMyNCA1Ljk3NjQ0IDIwOS43MTMgNi4wODcxMiAyMDkuMTY1IDYuMzA4NDdDMjA4LjYxOCA2LjUxODE3IDIwOC4yMjEgNi44MzI3MiAyMDcuOTc3IDcuMjUyMTJWMTIuNzU2N0gyMDUuMTgxVjMuNTgyMzdIMjA3Ljc1VjUuNDM0NzJDMjA4LjA2NCA0LjgxNzI3IDIwOC40NzIgNC4zMzM3OSAyMDguOTczIDMuOTg0MjlDMjA5LjQ3NCAzLjYzNDggMjA5Ljk5OCAzLjQ1NDIyIDIxMC41NDYgMy40NDI1N0MyMTAuNjc0IDMuNDQyNTcgMjEwLjc2NyAzLjQ0MjU3IDIxMC44MjUgMy40NDI1N0MyMTAuODk1IDMuNDQyNTcgMjEwLjk1MyAzLjQ0ODM5IDIxMSAzLjQ2MDA1VjUuOTc2NDRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTQyLjQyMyAxMi40MzZDMTQxLjY0MiAxMi40MzYgMTQwLjk0OSAxMi4zMTM2IDE0MC4zNDMgMTIuMDY5QzEzOS43MzcgMTEuODEyNyAxMzkuMjE5IDExLjQ2OSAxMzguNzg4IDExLjAzOEMxMzguMzY5IDEwLjYwNjkgMTM4LjA0OCAxMC4xMTE4IDEzNy44MjcgOS41NTI2QzEzNy42MDYgOC45ODE3NSAxMzcuNDk1IDguMzg3NiAxMzcuNDk1IDcuNzcwMTVDMTM3LjQ5NSA2Ljg4NDc2IDEzNy42ODcgNi4wODA5MSAxMzguMDcyIDUuMzU4NjFDMTM4LjQ2OCA0LjYyNDY2IDEzOS4wMzMgNC4wMzYzMyAxMzkuNzY3IDMuNTkzNjNDMTQwLjUwMSAzLjEzOTI4IDE0MS4zODYgMi45MTIxMSAxNDIuNDIzIDIuOTEyMTFDMTQzLjQ2IDIuOTEyMTEgMTQ0LjMzOSAzLjEzMzQ2IDE0NS4wNjIgMy41NzYxNkMxNDUuNzk1IDQuMDE4ODYgMTQ2LjM1NSA0LjYwMTM2IDE0Ni43MzkgNS4zMjM2NkMxNDcuMTI0IDYuMDM0MzEgMTQ3LjMxNiA2LjgwOTAzIDE0Ny4zMTYgNy42NDc4M0MxNDcuMzE2IDcuODEwOTMgMTQ3LjMwNCA3Ljk3NDAzIDE0Ny4yODEgOC4xMzcxM0MxNDcuMjY5IDguMjg4NTggMTQ3LjI1OCA4LjQyMjU1IDE0Ny4yNDYgOC41MzkwNUgxNDAuNDY2QzE0MC41MDEgOC45NDY4IDE0MC42MTEgOS4yOTA0OCAxNDAuNzk4IDkuNTcwMDhDMTQwLjk5NiA5Ljg0OTY4IDE0MS4yNDYgMTAuMDY1MiAxNDEuNTQ5IDEwLjIxNjdDMTQxLjg1MiAxMC4zNTY0IDE0Mi4xNzIgMTAuNDI2NCAxNDIuNTEgMTAuNDI2NEMxNDIuOTMgMTAuNDI2NCAxNDMuMzIgMTAuMzI3MyAxNDMuNjgxIDEwLjEyOTNDMTQ0LjA1NCA5LjkzMTIzIDE0NC4zMSA5LjY2MzI4IDE0NC40NSA5LjMyNTQzTDE0Ni44MjcgOS45ODk0OEMxNDYuNTk0IDEwLjQ2NzEgMTQ2LjI2MSAxMC44OTI0IDE0NS44MyAxMS4yNjUyQzE0NS40MTEgMTEuNjI2MyAxNDQuOTEgMTEuOTExNyAxNDQuMzI4IDEyLjEyMTRDMTQzLjc1NyAxMi4zMzExIDE0My4xMjIgMTIuNDM2IDE0Mi40MjMgMTIuNDM2Wk0xNDAuMzk2IDYuODI2NTFIMTQ0LjM4QzE0NC4zMzMgNi40NDIwNiAxNDQuMjIzIDYuMTEwMDMgMTQ0LjA0OCA1LjgzMDQzQzE0My44NzMgNS41MzkxOCAxNDMuNjQgNS4zMTc4MyAxNDMuMzQ5IDUuMTY2MzhDMTQzLjA1OCA1LjAwMzI4IDE0Mi43MzcgNC45MjE3MyAxNDIuMzg4IDQuOTIxNzNDMTQyLjAyNyA0LjkyMTczIDE0MS43MDEgNS4wMDMyOCAxNDEuNDA5IDUuMTY2MzhDMTQxLjEzIDUuMzE3ODMgMTQwLjkwMiA1LjUzOTE4IDE0MC43MjggNS44MzA0M0MxNDAuNTUzIDYuMTEwMDMgMTQwLjQ0MiA2LjQ0MjA2IDE0MC4zOTYgNi44MjY1MVoiIGZpbGw9IiNFMzE3MzgiLz4KPC9zdmc+Cg==">
                    </div>
                    <div class="header-info-wrapper">
                        <div class="header-info">
                        <span class="label-data-info">
                            <span class="label-data-info--value">Numer faktury</span>
                        </span>
                            <span class="label-data-info">
                            <span class="label-data-info--value2">B0014133-000</span>
                        </span>
                            <span class="label-data-info">
                                <span class="label-data-info--value">Faktura korygująca</span>
                        </span>

                            <span class="label-data-info">
                            <span class="label-data-info--name">Numer KSeF: </span>
                            <span class="label-data-info--value">9999999999-20230419-6DB939-8C07A1-21</span>
                        </span>

                        </div>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">
                        <span class="section-data__header section-data__header--h1">Dane faktury korygowanej</span>

                        <span class="label-data-info">
                    <span class="label-data-info--name">Przyczyna korekty dla faktur korygujących:</span><span class="label-data-info--value">returned good to warehouse: 3X0525801, 3X0525802, 3X0525803</span>
                </span>

                        <span class="label-data-info">
                    <span class="label-data-info--name">Typ skutku korekty:</span><span class="label-data-info--value">Korekta skutkująca w dacie wystawienia faktury korygującej</span>
                </span>
                    </div>

                    <div class="section-data__wrapper-right">

                        <span class="section-data__header section-data__header--h1">Dane identyfikacyjne faktury korygowanej</span>

                        <span class="label-data-info">
                        <span class="label-data-info--name">Data wystawienia faktury, której dotyczy faktura korygująca:</span>
                        <span class="label-data-info--value">2023-02-15</span>
                    </span>

                        <span class="label-data-info">
                        <span class="label-data-info--name">Numer faktury korygowanej:</span>
                        <span class="label-data-info--value">B0014126-001</span>
                    </span>

                        <span class="label-data-info">
                        <span class="label-data-info--name">Numer KSeF faktury korygowanej:</span>
                        <span class="label-data-info--value">9999999999-20230321-8602C3-9B5901-82</span>
                    </span>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">



                        <span class="section-data__header section-data__header--h1">Sprzedawca</span>


                        <span class="label-data-info">
        <span class="label-data-info--name">Prefiks VAT:</span><span class="label-data-info--value">Polska</span>
    </span>



                        <span class="label-data-info">
        <span class="label-data-info--name">NIP:</span><span class="label-data-info--value">9999999999</span>
    </span>
                        <span class="label-data-info">
        <span class="label-data-info--name">Pełna nazwa:</span><span class="label-data-info--value">LEAR CORPORATION POLAND SP ZOO</span>
    </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">SERDECZNA</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">40</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">43-100</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">TYCHY</span>
        </span>




                        <span class="label-data-info label-data-info--vertical-space">
    <span class="label-data-info--header">Dane kontaktowe</span>
</span>

                        <span class="label-data-info">
        <span class="label-data-info--name">Adres e-mail:</span><span class="label-data-info--value">gmbx-tyc22@lear.com</span>
    </span>

                        <span class="label-data-info">
        <span class="label-data-info--name">Tel.:</span><span class="label-data-info--value">48327585200</span>
    </span>
                    </div>
                    <div class="section-data__wrapper-right">



                        <span class="section-data__header section-data__header--h1">Nabywca</span>


                        <span class="label-data-info">
        <span class="label-data-info--name">Prefiks VAT:</span><span class="label-data-info--value">Hiszpania</span>
    </span>

                        <span class="label-data-info">
            <span class="label-data-info--name">Identyfikator podatkowy inny:</span><span class="label-data-info--value">A09021759</span>
        </span>


                        <span class="label-data-info">
        <span class="label-data-info--name">Pełna nazwa:</span><span class="label-data-info--value">VOLVO CAR CORPORATION</span>
    </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Kraj:</span><span class="label-data-info--value">Hiszpania</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">CTRA MADRID IRUN, KM 244,8, APARTADO</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">2048</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">09007</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">BURGOS</span>
        </span>


                    </div>

                </div>
                <div class="section-data">


                </div>
                <div class="section-data">

                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Szczegóły</span>


                    <span class="label-data-info label-data-info--half">
                <span class="label-data-info--name">Data wystawienia, z zastrzeżeniem art. 106na ust. 1 ustawy:</span><span class="label-data-info--value">2023-02-16</span>
            </span>



                    <span class="label-data-info label-data-info--half">
                    <span class="label-data-info--name">Data dokonania lub zakończenia dostawy towarów lub wykonania usługi:</span><span class="label-data-info--value">2023-02-15</span>
                </span>




                    <span class="label-data-info label-data-info--half">
                    <span class="label-data-info--name">Kurs waluty wspólny dla wszytkich wierszy faktury</span>
                </span>
                    <span class="label-data-info label-data-info--half">
                    <span class="label-data-info--name">Kurs waluty:</span><span class="label-data-info--value">4,7847</span>
                </span>


                </div>
                <div class="section-data">
                </div>
                <div class="section-data">
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Pozycje</span>

                    <span class="label-data-info">
        <span class="label-data-info--name">Faktura wystawiona w cenach netto w walucie EUR</span>
    </span>

                    <table class="table-basic table-basic--wide">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>
                            <th class="table-basic__header">Nazwa towaru lub usługi</th>
                            <th class="table-basic__header">Cena jedn. netto</th>
                            <th class="table-basic__header">ilość</th>

                            <th class="table-basic__header">Jedn.</th>
                            <th class="table-basic__header">Stawka podatku</th>
                            <th class="table-basic__header">Wartość sprzedaży netto</th>
                            <th class="table-basic__header">Kurs waluty</th>








                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">100228630-006</td>
                            <td class="table-basic__cell table-basic__cell--to-right">-5,09</td>
                            <td class="table-basic__cell table-basic__cell--to-right">2347,4</td>

                            <td class="table-basic__cell">M2</td>

                            <td class="table-basic__cell">0%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">-11&nbsp;948,27</td>
                            <td class="table-basic__cell table-basic__cell--to-right">4,78</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">2</td>
                            <td class="table-basic__cell">100228630-006</td>
                            <td class="table-basic__cell table-basic__cell--to-right">5,09</td>
                            <td class="table-basic__cell table-basic__cell--to-right">2003,5</td>

                            <td class="table-basic__cell">M2</td>

                            <td class="table-basic__cell">0%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">10&nbsp;197,82</td>
                            <td class="table-basic__cell table-basic__cell--to-right">4,78</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="label-data-info label-data-info--right">
                        <span class="label-data-info--name2">Kwota należności ogółem:</span>
                        <span class="label-data-info--value2">-1&nbsp;750,45&nbsp;EUR</span>
                    </div>

                </div>
                <div class="section-data">
                    <div class="line-basic"></div>

                    <span class="section-data__header section-data__header--h1">Podsumowanie stawek podatku</span>

                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>
                            <th class="table-basic__header">Stawka podatku</th>
                            <th class="table-basic__header">Kwota netto</th>
                            <th class="table-basic__header">Kwota podatku</th>
                            <th class="table-basic__header">Kwota brutto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">0%</td>

                            <td class="table-basic__cell table-basic__cell--to-right">-1&nbsp;750,45</td>

                            <td class="table-basic__cell table-basic__cell--to-right">0,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">-1&nbsp;750,45</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Płatność</span>


                    <span class="label-data-info">
            <span class="label-data-info--name">Forma płatności:</span><span class="label-data-info--value">Przelew</span>
        </span>
                </div>
                <div class="section-data">
                    <div class="section-data__wrapper-left">
                        <div class="keep-together to-left to-left--with-margin">
                            <table class="table-basic table-basic--wide">
                                <thead>
                                <tr>
                                    <th class="table-basic__header">Termin płatności</th>
                                    <th class="table-basic__header">Opis płatności</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="table-basic__cell">2023-03-30</td>
                                    <td class="table-basic__cell">net, 1-31 payable following 30th</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">
                        <span class="section-data__header section-data__header--h1">Numer rachunku bankowego </span>


                        <table class="table-basic">
                            <tbody>
                            <tr>
                                <th class="table-basic__header">Format rachunku</th>
                                <td class="table-basic__cell">Polski</td>
                            </tr>

                            <tr>
                                <th class="table-basic__header">Pełny numer rachunku w standardzie NRB</th>
                                <td class="table-basic__cell">05103015080000000501184235</td>
                            </tr>




                            <tr>
                                <th class="table-basic__header">Nazwa banku</th>
                                <td class="table-basic__cell">CITI HANDLOWY</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="section-data__wrapper-right">

                    </div>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--table">Numery dokumentów magazynowych WZ</span>

                    <table class="table-basic table-basic--auto">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--medium-size">Numer WZ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">PL016918</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--h1">Rejestry</span>

                    <table class="table-basic table-basic--auto">
                        <thead>
                        <tr>
                            <th class="table-basic__header">Pełna nazwa</th>
                            <th class="table-basic__header">KRS</th>
                            <th class="table-basic__header">REGON</th>
                            <th class="table-basic__header">BDO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">LEAR CORPORATION POLAND II SP ZOO</td>
                            <td class="table-basic__cell">0000085748</td>
                            <td class="table-basic__cell">273391026</td>
                            <td class="table-basic__cell">00006462</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--h1">Pozostałe informacje</span>

                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--medium-size">Stopka faktury</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">SHIP FROM: Lear Corporation Poland II Sp. z o.o.,UL.Strefowa2 43-150 Bierun,Poland. SHIP TO: GRUPO ANTOLIN EUROTRIM SA, CTRA MADRID IRUN, KM244.8, APARTADO 2048, BURGOS 09007, SPAIN.VAT:ESA09021759</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">VAT exempt. supply of goods Art.138 EU-DirectiveTEXTILE FABRIC COATED, COVERED OR LAMINATED WITH POLYURETHANEMATERIAL ZLAMINOWANY DO PRODUKCJI POSZYC SAMOCHODOWYCH</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
            <span class="label-data-info">
                <span class="label-data-info--name">Wytworzona w:</span><span class="label-data-info--value">Aplikacja Podatnika KSeF</span>
            </span>
                </div>
            </div>
        </div>
    </div>

    <div id="modalInvoice2" class="modal none">
        <div class="modal-content" id="modalInvoice2Content">
            <div class="close-modal">X</div>
            <div class="invoice-box">
                <div class="main-header">
                    <div class="ksef-title-wrapper">
                        <img height="27" alt="logo" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjExIiBoZWlnaHQ9IjE3IiB2aWV3Qm94PSIwIDAgMjExIDE3IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMCAxMi43NTY3VjAuMzY2OTc0SDEuNTcyNzVWNy4yMTcxN0w3Ljk2ODU5IDAuMzQ5NDk5SDkuNjYzNjZMNC42ODMyOSA1LjgxOTE3TDkuOTQzMjYgMTIuNzU2N0g4LjE3ODI5TDMuNjg3MjIgNi43NjI4MkwxLjU3Mjc1IDguOTY0NjZWMTIuNzU2N0gwWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE2LjI0MDMgNC45ODAzN0MxNS40NzE0IDQuOTkyMDIgMTQuNzg5OCA1LjE5MDA3IDE0LjE5NTcgNS41NzQ1MkMxMy42MTMyIDUuOTQ3MzIgMTMuMTk5NiA2LjQ2NTc0IDEyLjk1NSA3LjEyOTc5VjEyLjc1NjdIMTEuNDE3MlYzLjYzNDhIMTIuODUwMVY1Ljc0OTI3QzEzLjE2NDcgNS4xMjAxNyAxMy41NzgyIDQuNjEzMzkgMTQuMDkwOCA0LjIyODk0QzE0LjYxNTEgMy44MzI4NSAxNS4xNjI2IDMuNjExNSAxNS43MzM1IDMuNTY0OUMxNS44NSAzLjU2NDkgMTUuOTQ5IDMuNTY0OSAxNi4wMzA2IDMuNTY0OUMxNi4xMTIxIDMuNTY0OSAxNi4xODIgMy41NzA3MiAxNi4yNDAzIDMuNTgyMzdWNC45ODAzN1oiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNy4zMTExIDEwLjExOEMxNy4zMTExIDkuNTM1NTEgMTcuNDc0MiA5LjAzNDU2IDE3LjgwMDQgOC42MTUxNkMxOC4xMzgzIDguMTg0MTEgMTguNTk4NSA3Ljg1MjA5IDE5LjE4MSA3LjYxOTA5QzE5Ljc2MzUgNy4zODYwOSAyMC40MzkyIDcuMjY5NTkgMjEuMjA4MSA3LjI2OTU5QzIxLjYxNTggNy4yNjk1OSAyMi4wNDY5IDcuMzA0NTQgMjIuNTAxMiA3LjM3NDQ0QzIyLjk1NTYgNy40MzI2OSAyMy4zNTc1IDcuNTI1ODkgMjMuNzA3IDcuNjU0MDRWNi45ODk5OUMyMy43MDcgNi4yOTA5OSAyMy40OTczIDUuNzQzNDQgMjMuMDc3OSA1LjM0NzM0QzIyLjY1ODUgNC45Mzk1OSAyMi4wNjQzIDQuNzM1NzIgMjEuMjk1NCA0LjczNTcyQzIwLjc5NDUgNC43MzU3MiAyMC4zMTEgNC44Mjg5MiAxOS44NDUgNS4wMTUzMkMxOS4zOTA3IDUuMTkwMDcgMTguOTA3MiA1LjQ0NjM3IDE4LjM5NDYgNS43ODQyMkwxNy44MzU0IDQuNzAwNzdDMTguNDI5NSA0LjI5MzAyIDE5LjAyMzcgMy45OTAxMiAxOS42MTc4IDMuNzkyMDdDMjAuMjEyIDMuNTgyMzcgMjAuODI5NCAzLjQ3NzUyIDIxLjQ3MDIgMy40Nzc1MkMyMi42MzUyIDMuNDc3NTIgMjMuNTU1NSAzLjgwMzcyIDI0LjIzMTIgNC40NTYxMkMyNC45MDY5IDUuMDk2ODcgMjUuMjQ0OCA1Ljk5MzkyIDI1LjI0NDggNy4xNDcyN1YxMS4wMDkyQzI1LjI0NDggMTEuMTk1NiAyNS4yNzk3IDExLjMzNTQgMjUuMzQ5NiAxMS40Mjg2QzI1LjQzMTIgMTEuNTEwMiAyNS41NTkzIDExLjU1NjggMjUuNzM0MSAxMS41Njg0VjEyLjc1NjdDMjUuNTgyNiAxMi43OCAyNS40NDg3IDEyLjc5NzUgMjUuMzMyMiAxMi44MDkyQzI1LjIyNzMgMTIuODIwOCAyNS4xMzk5IDEyLjgyNjYgMjUuMDcgMTIuODI2NkMyNC43MDg5IDEyLjgyNjYgMjQuNDM1MSAxMi43Mjc2IDI0LjI0ODcgMTIuNTI5NkMyNC4wNzQgMTIuMzMxNSAyMy45NzQ5IDEyLjEyMTggMjMuOTUxNiAxMS45MDA1TDIzLjkxNjcgMTEuMzIzOEMyMy41MjA2IDExLjgzNjQgMjMuMDAyMiAxMi4yMzI1IDIyLjM2MTQgMTIuNTEyMUMyMS43MjA3IDEyLjc5MTcgMjEuMDg1NyAxMi45MzE1IDIwLjQ1NjYgMTIuOTMxNUMxOS44NTA4IDEyLjkzMTUgMTkuMzA5MSAxMi44MDkyIDE4LjgzMTUgMTIuNTY0NUMxOC4zNTM4IDEyLjMwODIgMTcuOTgxIDExLjk3MDQgMTcuNzEzMSAxMS41NTFDMTcuNDQ1MSAxMS4xMTk5IDE3LjMxMTEgMTAuNjQyMyAxNy4zMTExIDEwLjExOFpNMjMuMjUyNiAxMC43NjQ2QzIzLjM5MjQgMTAuNjAxNSAyMy41MDMxIDEwLjQzODQgMjMuNTg0NyAxMC4yNzUzQzIzLjY2NjIgMTAuMTAwNSAyMy43MDcgOS45NTQ5MSAyMy43MDcgOS44Mzg0MVY4LjcwMjU0QzIzLjM0NTggOC41NjI3NCAyMi45NjcyIDguNDU3ODkgMjIuNTcxMSA4LjM4Nzk5QzIyLjE3NSA4LjMwNjQ0IDIxLjc4NDcgOC4yNjU2NyAyMS40MDAzIDguMjY1NjdDMjAuNjE5NyA4LjI2NTY3IDE5Ljk4NDggOC40MjI5NCAxOS40OTU1IDguNzM3NDlDMTkuMDE3OSA5LjA0MDM5IDE4Ljc3OSA5LjQ1OTc5IDE4Ljc3OSA5Ljk5NTY5QzE4Ljc3OSAxMC4yODY5IDE4Ljg1NDggMTAuNTcyNCAxOS4wMDYyIDEwLjg1MkMxOS4xNjkzIDExLjExOTkgMTkuNDAyMyAxMS4zNDEzIDE5LjcwNTIgMTEuNTE2QzIwLjAxOTggMTEuNjkwOCAyMC40MDQyIDExLjc3ODEgMjAuODU4NiAxMS43NzgxQzIxLjMzNjIgMTEuNzc4MSAyMS43OTA2IDExLjY4NDkgMjIuMjIxNiAxMS40OTg1QzIyLjY1MjcgMTEuMzAwNSAyMi45OTYzIDExLjA1NTggMjMuMjUyNiAxMC43NjQ2WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTI2Ljc5NSAxNi4wMDcxQzI2LjM5ODkgMTYuMDA3MSAyNi4wMjAzIDE1Ljk0ODggMjUuNjU5MSAxNS44MzIzQzI1LjI5OCAxNS43MTU4IDI0Ljk3NzYgMTUuNTI5NCAyNC42OTggMTUuMjczMUwyNS40MTQ1IDE0LjI0MjFDMjUuNTc3NiAxNC4zOTM2IDI1Ljc2OTggMTQuNDk4NCAyNS45OTEyIDE0LjU1NjdDMjYuMjAwOSAxNC42MTQ5IDI2LjQxMDYgMTQuNjQ0IDI2LjYyMDMgMTQuNjQ0QzI2Ljg3NjYgMTQuNjQ0IDI3LjExNTQgMTQuNTggMjcuMzM2NyAxNC40NTE4QzI3LjU1ODEgMTQuMzIzNyAyNy43Mzg3IDE0LjE0MzEgMjcuODc4NSAxMy45MTAxQzI4LjAxODMgMTMuNjg4NyAyOC4wODgyIDEzLjQzODMgMjguMDg4MiAxMy4xNTg3VjMuNjM0OEgyOS42MjZWMTMuMDUzOEMyOS42MjYgMTMuNjI0NyAyOS40OTIgMTQuMTMxNCAyOS4yMjQgMTQuNTc0MUMyOC45NTYxIDE1LjAyODUgMjguNjA2NiAxNS4zNzggMjguMTc1NSAxNS42MjI2QzI3Ljc1NjEgMTUuODc4OSAyNy4yOTYgMTYuMDA3MSAyNi43OTUgMTYuMDA3MVpNMjguMDg4MiAxLjkyMjI1VjBIMjkuNjI2VjEuOTIyMjVIMjguMDg4MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0zNi4zNTkxIDEyLjkzMTVDMzUuNjcxOCAxMi45MzE1IDM1LjA0ODUgMTIuODA5MiAzNC40ODkzIDEyLjU2NDVDMzMuOTMwMSAxMi4zMDgyIDMzLjQ0NjcgMTEuOTY0NSAzMy4wMzg5IDExLjUzMzVDMzIuNjMxMiAxMS4wOTA4IDMyLjMxNjYgMTAuNTg0IDMyLjA5NTMgMTAuMDEzMkMzMS44NzM5IDkuNDQyMzEgMzEuNzYzMiA4Ljg0MjM0IDMxLjc2MzIgOC4yMTMyNEMzMS43NjMyIDcuNTcyNDkgMzEuODczOSA2Ljk2NjY5IDMyLjA5NTMgNi4zOTU4NEMzMi4zMTY2IDUuODI0OTkgMzIuNjMxMiA1LjMyNDA0IDMzLjAzODkgNC44OTI5OUMzMy40NDY3IDQuNDUwMjkgMzMuOTMwMSA0LjEwNjYyIDM0LjQ4OTMgMy44NjE5N0MzNS4wNjAyIDMuNjA1NjcgMzUuNjgzNCAzLjQ3NzUyIDM2LjM1OTEgMy40Nzc1MkMzNy4wNDY1IDMuNDc3NTIgMzcuNjY5OCAzLjYwNTY3IDM4LjIyOSAzLjg2MTk3QzM4Ljc4ODIgNC4xMDY2MiAzOS4yNzE2IDQuNDUwMjkgMzkuNjc5NCA0Ljg5Mjk5QzQwLjA5ODggNS4zMjQwNCA0MC40MTkyIDUuODI0OTkgNDAuNjQwNSA2LjM5NTg0QzQwLjg2MTkgNi45NjY2OSA0MC45NzI1IDcuNTcyNDkgNDAuOTcyNSA4LjIxMzI0QzQwLjk3MjUgOC44NDIzNCA0MC44NjE5IDkuNDQyMzEgNDAuNjQwNSAxMC4wMTMyQzQwLjQxOTIgMTAuNTg0IDQwLjEwNDYgMTEuMDkwOCAzOS42OTY5IDExLjUzMzVDMzkuMjg5MSAxMS45NjQ1IDM4Ljc5OTggMTIuMzA4MiAzOC4yMjkgMTIuNTY0NUMzNy42Njk4IDEyLjgwOTIgMzcuMDQ2NSAxMi45MzE1IDM2LjM1OTEgMTIuOTMxNVpNMzMuMzM2IDguMjMwNzFDMzMuMzM2IDguODU5ODEgMzMuNDcgOS40MzA2NiAzMy43Mzc5IDkuOTQzMjZDMzQuMDE3NSAxMC40NTU5IDM0LjM4NDUgMTAuODYzNiAzNC44Mzg4IDExLjE2NjVDMzUuMjkzMiAxMS40NTc4IDM1Ljc5OTkgMTEuNjAzNCAzNi4zNTkxIDExLjYwMzRDMzYuOTE4MyAxMS42MDM0IDM3LjQyNTEgMTEuNDUxOSAzNy44Nzk1IDExLjE0OUMzOC4zNDU1IDEwLjg0NjEgMzguNzEyNCAxMC40Mzg0IDM4Ljk4MDQgOS45MjU3OUMzOS4yNiA5LjQwMTU0IDM5LjM5OTggOC44MjQ4NiAzOS4zOTk4IDguMTk1NzdDMzkuMzk5OCA3LjU2NjY3IDM5LjI2IDYuOTk1ODIgMzguOTgwNCA2LjQ4MzIyQzM4LjcxMjQgNS45NzA2MiAzOC4zNDU1IDUuNTYyODcgMzcuODc5NSA1LjI1OTk3QzM3LjQyNTEgNC45NTcwNyAzNi45MTgzIDQuODA1NjIgMzYuMzU5MSA0LjgwNTYyQzM1Ljc5OTkgNC44MDU2MiAzNS4yOTMyIDQuOTYyODkgMzQuODM4OCA1LjI3NzQ0QzM0LjM4NDUgNS41ODAzNCAzNC4wMTc1IDUuOTg4MDkgMzMuNzM3OSA2LjUwMDY5QzMzLjQ3IDcuMDEzMjkgMzMuMzM2IDcuNTg5OTcgMzMuMzM2IDguMjMwNzFaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNNTQuMjE5NSAzLjYzNDhINTUuNzA0OUw1MS44MjU1IDEyLjc1NjdINTAuNDc5OUw0OC43MTQ5IDguNDU3ODlMNDYuOTY3NCAxMi43NTY3SDQ1LjYyMThMNDEuNzQyNCAzLjYzNDhINDMuMjEwM0w0Ni4zNTU4IDExLjIzNjRMNDcuODIzNyA3LjQ5Njc3TDQ2LjI4NTkgMy42NTIyN0g0Ny42MzE1TDQ4LjcxNDkgNi41NTMxMkw0OS43OTg0IDMuNjUyMjdINTEuMTQzOUw0OS42MjM2IDcuNDk2NzdMNTEuMDkxNSAxMS4yMzY0TDU0LjIxOTUgMy42MzQ4WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTU3LjgyNDQgMTUuMjM4MkM1Ny45NzU5IDE1LjI0OTggNTguMTI3MyAxNS4yNjE1IDU4LjI3ODggMTUuMjczMUM1OC40MzAyIDE1LjI5NjQgNTguNTQ2NyAxNS4zMDgxIDU4LjYyODMgMTUuMzA4MUM1OC44MTQ3IDE1LjMwODEgNTguOTc3OCAxNS4yNDQgNTkuMTE3NiAxNS4xMTU5QzU5LjI1NzQgMTQuOTg3NyA1OS40MDg4IDE0LjczNzIgNTkuNTcxOSAxNC4zNjQ0QzU5Ljc0NjcgMTQuMDAzMyA1OS45NjggMTMuNDY3NCA2MC4yMzYgMTIuNzU2N0w1Ni4zNzQgMy42MzQ4SDU3Ljk5OTJMNjEuMDc0OCAxMS4yMDE1TDYzLjg1MzMgMy42MzQ4SDY1LjM3MzZMNjAuOTM1IDE1LjE1MDhDNjAuODMwMSAxNS40MTg4IDYwLjY3MjggMTUuNjY5MiA2MC40NjMxIDE1LjkwMjJDNjAuMjY1MSAxNi4xNDY5IDYwLjAwODggMTYuMzM5MSA1OS42OTQyIDE2LjQ3ODlDNTkuMzc5NyAxNi42MTg3IDU5LjAwMTEgMTYuNjg4NiA1OC41NTg0IDE2LjY4ODZDNTguNDUzNSAxNi42ODg2IDU4LjM0MjggMTYuNjgyOCA1OC4yMjYzIDE2LjY3MTFDNTguMTIxNSAxNi42NTk1IDU3Ljk4NzUgMTYuNjM2MiA1Ny44MjQ0IDE2LjYwMTJWMTUuMjM4MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik03OC45MjU2IDIuOTUzMjdDNzguNzg1OCAyLjc5MDE3IDc4LjU5OTQgMi42MzI5IDc4LjM2NjQgMi40ODE0NUM3OC4xMzM0IDIuMzMgNzcuODcxMyAyLjE5NjAyIDc3LjU4IDIuMDc5NTJDNzcuMjg4OCAxLjk1MTM3IDc2Ljk2ODQgMS44NTIzNSA3Ni42MTg5IDEuNzgyNDVDNzYuMjgxMSAxLjcwMDkgNzUuOTI1NyAxLjY2MDEyIDc1LjU1MjkgMS42NjAxMkM3NC41OTc2IDEuNjYwMTIgNzMuODkyOCAxLjg0MDcgNzMuNDM4NSAyLjIwMTg1QzcyLjk4NDEgMi41NjMgNzIuNzU2OSAzLjA1ODEyIDcyLjc1NjkgMy42ODcyMkM3Mi43NTY5IDQuMTI5OTIgNzIuODczNCA0LjQ3OTQyIDczLjEwNjQgNC43MzU3MkM3My4zMzk0IDQuOTkyMDIgNzMuNjk0OCA1LjIwMTcyIDc0LjE3MjQgNS4zNjQ4MkM3NC42NjE3IDUuNTI3OTIgNzUuMjc5MiA1LjY5Njg0IDc2LjAyNDcgNS44NzE1OUM3Ni44ODY4IDYuMDU3OTkgNzcuNjMyNSA2LjI4NTE3IDc4LjI2MTYgNi41NTMxMkM3OC44OTA2IDYuODIxMDcgNzkuMzc0MSA3LjE4MjIyIDc5LjcxMiA3LjYzNjU3QzgwLjA0OTggOC4wNzkyNiA4MC4yMTg4IDguNjczNDEgODAuMjE4OCA5LjQxOTAxQzgwLjIxODggMTAuMDEzMiA4MC4xMDIyIDEwLjUzMTYgNzkuODY5MiAxMC45NzQzQzc5LjY0NzkgMTEuNDA1MyA3OS4zMzMzIDExLjc2NjUgNzguOTI1NiAxMi4wNTc3Qzc4LjUxNzggMTIuMzM3MyA3OC4wNDAyIDEyLjU0NyA3Ny40OTI3IDEyLjY4NjhDNzYuOTQ1MSAxMi44MTUgNzYuMzUxIDEyLjg3OTEgNzUuNzEwMiAxMi44NzkxQzc1LjA4MTEgMTIuODc5MSA3NC40NjM2IDEyLjgxNSA3My44NTc4IDEyLjY4NjhDNzMuMjYzNyAxMi41NDcgNzIuNjk4NyAxMi4zNDkgNzIuMTYyOCAxMi4wOTI3QzcxLjYyNjkgMTEuODM2NCA3MS4xMjU5IDExLjUxNiA3MC42NTk5IDExLjEzMTZMNzEuNDExNCA5LjgwMzQ2QzcxLjU5NzggMTAuMDAxNSA3MS44MzY2IDEwLjE5OTYgNzIuMTI3OCAxMC4zOTc2QzcyLjQzMDcgMTAuNTg0IDcyLjc2ODYgMTAuNzU4OCA3My4xNDE0IDEwLjkyMTlDNzMuNTI1OCAxMS4wODUgNzMuOTM5NCAxMS4yMTg5IDc0LjM4MjEgMTEuMzIzOEM3NC44MjQ4IDExLjQxNyA3NS4yNzkyIDExLjQ2MzYgNzUuNzQ1MiAxMS40NjM2Qzc2LjYzMDYgMTEuNDYzNiA3Ny4zMTc5IDExLjMwNjMgNzcuODA3MiAxMC45OTE4Qzc4LjI5NjUgMTAuNjY1NiA3OC41NDEyIDEwLjE5MzcgNzguNTQxMiA5LjU3NjI5Qzc4LjU0MTIgOS4xMTAyOSA3OC40MDEzIDguNzM3NDkgNzguMTIxNyA4LjQ1Nzg5Qzc3Ljg1MzggOC4xNzgyOSA3Ny40NTE5IDcuOTQ1MjkgNzYuOTE2IDcuNzU4ODlDNzYuMzgwMSA3LjU3MjQ5IDc1LjcyNzcgNy4zODYwOSA3NC45NTg4IDcuMTk5NjlDNzQuMTIgNi45ODk5OSA3My40MTUyIDYuNzYyODIgNzIuODQ0MyA2LjUxODE3QzcyLjI3MzUgNi4yNjE4NyA3MS44NDI0IDUuOTI5ODQgNzEuNTUxMiA1LjUyMjA5QzcxLjI3MTYgNS4xMTQzNCA3MS4xMzE4IDQuNTg0MjcgNzEuMTMxOCAzLjkzMTg3QzcxLjEzMTggMy4xMzk2NyA3MS4zMjQgMi40Njk4IDcxLjcwODQgMS45MjIyNUM3Mi4wOTI5IDEuMzc0NyA3Mi42MjMgMC45NjExMjMgNzMuMjk4NyAwLjY4MTUyNEM3My45NzQ0IDAuNDAxOTI0IDc0LjczNzQgMC4yNjIxMjUgNzUuNTg3OSAwLjI2MjEyNUM3Ni4xNDcxIDAuMjYyMTI1IDc2LjY2NTUgMC4zMjAzNzQgNzcuMTQzMiAwLjQzNjg3NEM3Ny42MzI1IDAuNTUzMzc0IDc4LjA4NjggMC43MTY0NzQgNzguNTA2MiAwLjkyNjE3M0M3OC45MjU2IDEuMTM1ODcgNzkuMzEgMS4zODYzNSA3OS42NTk1IDEuNjc3Nkw3OC45MjU2IDIuOTUzMjdaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNODIuNDM0MSAxNS4yMzgyQzgyLjU4NTYgMTUuMjQ5OCA4Mi43MzcgMTUuMjYxNSA4Mi44ODg1IDE1LjI3MzFDODMuMDM5OSAxNS4yOTY0IDgzLjE1NjQgMTUuMzA4MSA4My4yMzggMTUuMzA4MUM4My40MjQ0IDE1LjMwODEgODMuNTg3NSAxNS4yNDQgODMuNzI3MyAxNS4xMTU5QzgzLjg2NzEgMTQuOTg3NyA4NC4wMTg1IDE0LjczNzIgODQuMTgxNiAxNC4zNjQ0Qzg0LjM1NjQgMTQuMDAzMyA4NC41Nzc3IDEzLjQ2NzQgODQuODQ1NyAxMi43NTY3TDgwLjk4MzcgMy42MzQ4SDgyLjYwODlMODUuNjg0NSAxMS4yMDE1TDg4LjQ2MyAzLjYzNDhIODkuOTgzM0w4NS41NDQ3IDE1LjE1MDhDODUuNDM5OCAxNS40MTg4IDg1LjI4MjUgMTUuNjY5MiA4NS4wNzI4IDE1LjkwMjJDODQuODc0OCAxNi4xNDY5IDg0LjYxODUgMTYuMzM5MSA4NC4zMDM5IDE2LjQ3ODlDODMuOTg5NCAxNi42MTg3IDgzLjYxMDggMTYuNjg4NiA4My4xNjgxIDE2LjY4ODZDODMuMDYzMiAxNi42ODg2IDgyLjk1MjUgMTYuNjgyOCA4Mi44MzYgMTYuNjcxMUM4Mi43MzEyIDE2LjY1OTUgODIuNTk3MiAxNi42MzYyIDgyLjQzNDEgMTYuNjAxMlYxNS4yMzgyWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTk0LjY4ODQgMTIuOTMxNUM5My45MzEyIDEyLjkzMTUgOTMuMjIwNSAxMi44MDkyIDkyLjU1NjUgMTIuNTY0NUM5MS44OTI0IDEyLjMwODIgOTEuMzIxNiAxMS45Mjk2IDkwLjg0MzkgMTEuNDI4Nkw5MS40MzgxIDEwLjM0NTJDOTEuOTYyMyAxMC44MzQ1IDkyLjQ4NjYgMTEuMTg0IDkzLjAxMDggMTEuMzkzN0M5My41MzUxIDExLjYwMzQgOTQuMDcxIDExLjcwODIgOTQuNjE4NSAxMS43MDgyQzk1LjI0NzYgMTEuNzA4MiA5NS43NjAyIDExLjU5MTcgOTYuMTU2MyAxMS4zNTg3Qzk2LjU1MjQgMTEuMTE0MSA5Ni43NTA1IDEwLjc1ODggOTYuNzUwNSAxMC4yOTI4Qzk2Ljc1MDUgOS45NTQ5MSA5Ni42NDU2IDkuNzA0NDQgOTYuNDM1OSA5LjU0MTM0Qzk2LjIzNzkgOS4zNzgyNCA5NS45NTI1IDkuMjQ0MjYgOTUuNTc5NyA5LjEzOTQxQzk1LjIwNjkgOS4wMjI5MSA5NC43NjQyIDguODk0NzYgOTQuMjUxNiA4Ljc1NDk2QzkzLjYyMjUgOC41Njg1NiA5My4wOTI0IDguMzcwNTIgOTIuNjYxMyA4LjE2MDgyQzkyLjIzMDMgNy45NTExMiA5MS45MDQxIDcuNjg4OTkgOTEuNjgyNyA3LjM3NDQ0QzkxLjQ2MTQgNy4wNTk4OSA5MS4zNTA3IDYuNjYzNzkgOTEuMzUwNyA2LjE4NjE0QzkxLjM1MDcgNS42MDM2NCA5MS41MDIyIDUuMTE0MzQgOTEuODA1MSA0LjcxODI0QzkyLjEwOCA0LjMxMDQ5IDkyLjUyMTUgNC4wMDE3NyA5My4wNDU4IDMuNzkyMDdDOTMuNTgxNyAzLjU4MjM3IDk0LjE4NzUgMy40Nzc1MiA5NC44NjMyIDMuNDc3NTJDOTUuNTM4OSAzLjQ3NzUyIDk2LjE1MDUgMy41ODIzNyA5Ni42OTgxIDMuNzkyMDdDOTcuMjQ1NiA0LjAwMTc3IDk3LjcxNzQgNC4zMTA0OSA5OC4xMTM1IDQuNzE4MjRMOTcuNDE0NSA1Ljc4NDIyQzk3LjA1MzQgNS40MTE0MiA5Ni42NTczIDUuMTM3NjQgOTYuMjI2MiA0Ljk2Mjg5Qzk1Ljc5NTIgNC43NzY0OSA5NS4zMTE3IDQuNjgzMjkgOTQuNzc1OCA0LjY4MzI5Qzk0LjQ2MTMgNC42ODMyOSA5NC4xNTI1IDQuNzI0MDcgOTMuODQ5NiA0LjgwNTYyQzkzLjU0NjcgNC44NzU1MiA5My4yOTYzIDUuMDA5NDkgOTMuMDk4MiA1LjIwNzU0QzkyLjkwMDIgNS4zOTM5NCA5Mi44MDExIDUuNjYxODkgOTIuODAxMSA2LjAxMTM5QzkyLjgwMTEgNi4zMDI2NCA5Mi44NzY5IDYuNTM1NjQgOTMuMDI4MyA2LjcxMDM5QzkzLjE5MTQgNi44NzM0OSA5My40MjQ0IDcuMDEzMjkgOTMuNzI3MyA3LjEyOTc5Qzk0LjA0MTkgNy4yNDYyOSA5NC40MjA1IDcuMzc0NDQgOTQuODYzMiA3LjUxNDI0Qzk1LjU1MDUgNy43MTIyOSA5Ni4xNDQ3IDcuOTEwMzQgOTYuNjQ1NiA4LjEwODM5Qzk3LjE1ODIgOC4zMDY0NCA5Ny41NTQzIDguNTYyNzQgOTcuODMzOSA4Ljg3NzI5Qzk4LjExMzUgOS4xOTE4NCA5OC4yNTMzIDkuNjI4NzEgOTguMjUzMyAxMC4xODc5Qzk4LjI1MzMgMTEuMDUgOTcuOTI3MSAxMS43MjU3IDk3LjI3NDcgMTIuMjE1Qzk2LjYyMjMgMTIuNjkyNyA5NS43NjAyIDEyLjkzMTUgOTQuNjg4NCAxMi45MzE1WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEwNS4wNzMgMTIuMzAyNEMxMDQuOTQ1IDEyLjM2MDYgMTA0Ljc3MSAxMi40MzY0IDEwNC41NDkgMTIuNTI5NkMxMDQuMzI4IDEyLjYyMjggMTA0LjA3MiAxMi43MDQzIDEwMy43OCAxMi43NzQyQzEwMy40ODkgMTIuODQ0MSAxMDMuMTggMTIuODc5MSAxMDIuODU0IDEyLjg3OTFDMTAyLjQ4MSAxMi44NzkxIDEwMi4xMzggMTIuODE1IDEwMS44MjMgMTIuNjg2OEMxMDEuNTA5IDEyLjU0NyAxMDEuMjU4IDEyLjMzNzMgMTAxLjA3MiAxMi4wNTc3QzEwMC44ODUgMTEuNzY2NSAxMDAuNzkyIDExLjQwNTMgMTAwLjc5MiAxMC45NzQzVjQuODQwNTdIOTkuNTUxNFYzLjYzNDhIMTAwLjc5MlYwLjU5NDE0OUgxMDIuMzNWMy42MzQ4SDEwNC4zNzRWNC44NDA1N0gxMDIuMzNWMTAuNTAyNUMxMDIuMzUzIDEwLjgyODcgMTAyLjQ2NCAxMS4wNzMzIDEwMi42NjIgMTEuMjM2NEMxMDIuODYgMTEuMzg3OSAxMDMuMDkzIDExLjQ2MzYgMTAzLjM2MSAxMS40NjM2QzEwMy42NjQgMTEuNDYzNiAxMDMuOTQzIDExLjQxMTIgMTA0LjIgMTEuMzA2M0MxMDQuNDU2IDExLjIwMTUgMTA0LjYyNSAxMS4xMjU3IDEwNC43MDcgMTEuMDc5MUwxMDUuMDczIDEyLjMwMjRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTEwLjY3OCAxMi45MzE1QzEwOS45OTEgMTIuOTMxNSAxMDkuMzYyIDEyLjgwOTIgMTA4Ljc5MSAxMi41NjQ1QzEwOC4yMzIgMTIuMzA4MiAxMDcuNzQyIDExLjk2NDUgMTA3LjMyMyAxMS41MzM1QzEwNi45MTUgMTEuMDkwOCAxMDYuNTk1IDEwLjU4NCAxMDYuMzYyIDEwLjAxMzJDMTA2LjE0MSA5LjQ0MjMxIDEwNi4wMyA4LjgzNjUxIDEwNi4wMyA4LjE5NTc3QzEwNi4wMyA3LjMzMzY3IDEwNi4yMjggNi41NDcyOSAxMDYuNjI0IDUuODM2NjRDMTA3LjAyIDUuMTI1OTkgMTA3LjU2OCA0LjU1NTE0IDEwOC4yNjcgNC4xMjQxQzEwOC45NzcgMy42OTMwNSAxMDkuNzg3IDMuNDc3NTIgMTEwLjY5NiAzLjQ3NzUyQzExMS42MTYgMy40Nzc1MiAxMTIuNDE0IDMuNjk4ODcgMTEzLjA5IDQuMTQxNTdDMTEzLjc3NyA0LjU3MjYyIDExNC4zMDcgNS4xNDM0NyAxMTQuNjggNS44NTQxMkMxMTUuMDY0IDYuNTUzMTIgMTE1LjI1NyA3LjMxMDM3IDExNS4yNTcgOC4xMjU4NkMxMTUuMjU3IDguMjQyMzYgMTE1LjI1MSA4LjM1ODg2IDExNS4yMzkgOC40NzUzNkMxMTUuMjM5IDguNTgwMjEgMTE1LjIzMyA4LjY2MTc2IDExNS4yMjIgOC43MjAwMUgxMDcuNjU1QzEwNy43MDIgOS4zMTQxNiAxMDcuODY1IDkuODQ0MjQgMTA4LjE0NCAxMC4zMTAyQzEwOC40MzYgMTAuNzY0NiAxMDguODA4IDExLjEyNTcgMTA5LjI2MyAxMS4zOTM3QzEwOS43MTcgMTEuNjUgMTEwLjIwNiAxMS43NzgxIDExMC43MzEgMTEuNzc4MUMxMTEuMjkgMTEuNzc4MSAxMTEuODE0IDExLjYzODMgMTEyLjMwMyAxMS4zNTg3QzExMi44MDQgMTEuMDc5MSAxMTMuMTQ4IDEwLjcxMjIgMTEzLjMzNCAxMC4yNTc4TDExNC42NjIgMTAuNjI0OEMxMTQuNDY0IDExLjA2NzUgMTE0LjE2NyAxMS40NjM2IDExMy43NzEgMTEuODEzMUMxMTMuMzg3IDEyLjE2MjYgMTEyLjkyNyAxMi40MzY0IDExMi4zOTEgMTIuNjM0NEMxMTEuODY2IDEyLjgzMjUgMTExLjI5NiAxMi45MzE1IDExMC42NzggMTIuOTMxNVpNMTA3LjYwMyA3LjY1NDA0SDExMy44MjRDMTEzLjc3NyA3LjA1OTg5IDExMy42MDggNi41MzU2NCAxMTMuMzE3IDYuMDgxMjlDMTEzLjAyNiA1LjYyNjk0IDExMi42NTMgNS4yNzE2MiAxMTIuMTk5IDUuMDE1MzJDMTExLjc0NCA0Ljc1OTAyIDExMS4yNDMgNC42MzA4NyAxMTAuNjk2IDQuNjMwODdDMTEwLjE2IDQuNjMwODcgMTA5LjY2NSA0Ljc1OTAyIDEwOS4yMSA1LjAxNTMyQzEwOC43NTYgNS4yNzE2MiAxMDguMzgzIDUuNjI2OTQgMTA4LjA5MiA2LjA4MTI5QzEwNy44MTIgNi41MzU2NCAxMDcuNjQ5IDcuMDU5ODkgMTA3LjYwMyA3LjY1NDA0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEzMC45ODEgMTIuNzU2N0gxMjkuNDQzVjcuNjU0MDRDMTI5LjQ0MyA2LjY5ODc0IDEyOS4yODYgNS45OTM5MiAxMjguOTcxIDUuNTM5NTdDMTI4LjY2OCA1LjA4NTIyIDEyOC4yMTQgNC44NTgwNCAxMjcuNjA4IDQuODU4MDRDMTI2Ljk5MSA0Ljg1ODA0IDEyNi40MzIgNS4wODUyMiAxMjUuOTMxIDUuNTM5NTdDMTI1LjQzIDUuOTgyMjcgMTI1LjA3NCA2LjU1ODk0IDEyNC44NjUgNy4yNjk1OVYxMi43NTY3SDEyMy4zMjdWNy42NTQwNEMxMjMuMzI3IDYuNjg3MDkgMTIzLjE3NSA1Ljk4MjI3IDEyMi44NzMgNS41Mzk1N0MxMjIuNTcgNS4wODUyMiAxMjIuMTE1IDQuODU4MDQgMTIxLjUxIDQuODU4MDRDMTIwLjkwNCA0Ljg1ODA0IDEyMC4zNDUgNS4wNzkzOSAxMTkuODMyIDUuNTIyMDlDMTE5LjMzMSA1Ljk1MzE0IDExOC45NzYgNi41Mjk4MiAxMTguNzY2IDcuMjUyMTJWMTIuNzU2N0gxMTcuMjI4VjMuNjM0OEgxMTguNjI2VjUuNTkxOTlDMTE4Ljk5OSA0LjkxNjI5IDExOS40ODIgNC4zOTc4NyAxMjAuMDc3IDQuMDM2NzJDMTIwLjY3MSAzLjY2MzkyIDEyMS4zNDEgMy40Nzc1MiAxMjIuMDg2IDMuNDc3NTJDMTIyLjg0MyAzLjQ3NzUyIDEyMy40NDkgMy42ODcyMiAxMjMuOTA0IDQuMTA2NjJDMTI0LjM1OCA0LjUxNDM3IDEyNC42MzggNS4wNDQ0NCAxMjQuNzQyIDUuNjk2ODRDMTI1LjE1IDQuOTc0NTQgMTI1LjY0NSA0LjQyNjk5IDEyNi4yMjggNC4wNTQxOUMxMjYuODEgMy42Njk3NSAxMjcuNDc0IDMuNDc3NTIgMTI4LjIyIDMuNDc3NTJDMTI4Ljc0NCAzLjQ3NzUyIDEyOS4xODEgMy41NzY1NSAxMjkuNTMxIDMuNzc0NkMxMjkuODkyIDMuOTYwOTkgMTMwLjE3NyA0LjIyODk0IDEzMC4zODcgNC41Nzg0NEMxMzAuNTk3IDQuOTE2MjkgMTMwLjc0OCA1LjMxODIyIDEzMC44NDEgNS43ODQyMkMxMzAuOTM0IDYuMjUwMjIgMTMwLjk4MSA2Ljc1Njk5IDEzMC45ODEgNy4zMDQ1NFYxMi43NTY3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE0OC44MjggOS4yMDkzMVY2LjY5MjkySDE1NC4yMVY5LjIwOTMxSDE0OC44MjhaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTU2LjYwNCAxMi43NTY3VjAuMzQ5NDk5SDE2NS4wMjdWMi44NjU5SDE1OS40N1Y1LjUzOTU3SDE2NC4wNDlWNy44NjM3NEgxNTkuNDdWMTIuNzU2N0gxNTYuNjA0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE2NS4zOCAxMC4wMTMyQzE2NS4zOCA5LjQwNzM2IDE2NS41NDkgOC44NzcyOSAxNjUuODg3IDguNDIyOTRDMTY2LjIyNSA3Ljk2ODU5IDE2Ni42OTEgNy42MTMyNyAxNjcuMjg1IDcuMzU2OTdDMTY3Ljg3OSA3LjA4OTAyIDE2OC41NjEgNi45NTUwNCAxNjkuMzMgNi45NTUwNEMxNjkuNzAyIDYuOTU1MDQgMTcwLjA2OSA2Ljk4OTk5IDE3MC40MzEgNy4wNTk4OUMxNzAuNzkyIDcuMTE4MTQgMTcxLjEwNiA3LjIwNTUyIDE3MS4zNzQgNy4zMjIwMlY2LjkyMDA5QzE3MS4zNzQgNi40MTkxNCAxNzEuMjIzIDYuMDM0NjkgMTcwLjkyIDUuNzY2NzRDMTcwLjYxNyA1LjQ5ODc5IDE3MC4xNTcgNS4zNjQ4MiAxNjkuNTM5IDUuMzY0ODJDMTY5LjAyNyA1LjM2NDgyIDE2OC41NDMgNS40NTIxOSAxNjguMDg5IDUuNjI2OTRDMTY3LjY0NiA1LjgwMTY5IDE2Ny4xNzQgNi4wNTIxNyAxNjYuNjczIDYuMzc4MzdMMTY1LjgzNSA0LjU5NTkyQzE2Ni40NCA0LjE5OTgyIDE2Ny4wNyAzLjkwMjc0IDE2Ny43MjIgMy43MDQ3QzE2OC4zODYgMy41MDY2NSAxNjkuMDg1IDMuNDA3NjIgMTY5LjgxOSAzLjQwNzYyQzE3MS4xOTQgMy40MDc2MiAxNzIuMjYgMy43Mzk2NSAxNzMuMDE3IDQuNDAzNjlDMTczLjc4NiA1LjA1NjA5IDE3NC4xNyA2LjAwNTU3IDE3NC4xNyA3LjI1MjEyVjkuNjQ2MTlDMTc0LjE3IDkuOTI1NzkgMTc0LjIxMSAxMC4xMjM4IDE3NC4yOTMgMTAuMjQwM0MxNzQuMzg2IDEwLjM0NTIgMTc0LjU0MyAxMC40MDkzIDE3NC43NjQgMTAuNDMyNlYxMi43NTY3QzE3NC41MzEgMTIuODAzMyAxNzQuMzEgMTIuODM4MyAxNzQuMSAxMi44NjE2QzE3My45MDIgMTIuODg0OSAxNzMuNzI4IDEyLjg5NjUgMTczLjU3NiAxMi44OTY1QzE3My4wNTIgMTIuODk2NSAxNzIuNjUgMTIuNzkxNyAxNzIuMzcgMTIuNTgyQzE3Mi4xMDIgMTIuMzcyMyAxNzEuOTMzIDEyLjA4NjkgMTcxLjg2NCAxMS43MjU3TDE3MS44MTEgMTEuMzIzOEMxNzEuNDAzIDExLjg0OCAxNzAuOTE0IDEyLjI1IDE3MC4zNDMgMTIuNTI5NkMxNjkuNzg0IDEyLjc5NzUgMTY5LjE5NiAxMi45MzE1IDE2OC41NzggMTIuOTMxNUMxNjcuOTcyIDEyLjkzMTUgMTY3LjQyNSAxMi44MDMzIDE2Ni45MzYgMTIuNTQ3QzE2Ni40NTggMTIuMjkwNyAxNjYuMDc5IDExLjk0MTIgMTY1LjggMTEuNDk4NUMxNjUuNTIgMTEuMDU1OCAxNjUuMzggMTAuNTYwNyAxNjUuMzggMTAuMDEzMlpNMTcwLjkzNyAxMC4zNjI3QzE3MS4wNjYgMTAuMjU3OCAxNzEuMTcgMTAuMTQxMyAxNzEuMjUyIDEwLjAxMzJDMTcxLjMzMyA5Ljg4NTAxIDE3MS4zNzQgOS43NjI2OSAxNzEuMzc0IDkuNjQ2MTlWOC44MjQ4NkMxNzEuMTQxIDguNzMxNjYgMTcwLjg3OSA4LjY2MTc2IDE3MC41ODggOC42MTUxNkMxNzAuMzA4IDguNTU2OTEgMTcwLjA0NiA4LjUyNzc5IDE2OS44MDEgOC41Mjc3OUMxNjkuMjg5IDguNTI3NzkgMTY4Ljg2NCA4LjY0NDI5IDE2OC41MjYgOC44NzcyOUMxNjguMTg4IDkuMDk4NjQgMTY4LjAxOSA5LjM5NTcxIDE2OC4wMTkgOS43Njg1MUMxNjguMDE5IDkuOTc4MjEgMTY4LjA3NyAxMC4xNzA0IDE2OC4xOTQgMTAuMzQ1MkMxNjguMzEgMTAuNTE5OSAxNjguNDY4IDEwLjY1OTcgMTY4LjY2NiAxMC43NjQ2QzE2OC44NzUgMTAuODY5NCAxNjkuMTIgMTAuOTIxOSAxNjkuNCAxMC45MjE5QzE2OS42NzkgMTAuOTIxOSAxNjkuOTU5IDEwLjg2OTQgMTcwLjIzOCAxMC43NjQ2QzE3MC41MTggMTAuNjU5NyAxNzAuNzUxIDEwLjUyNTggMTcwLjkzNyAxMC4zNjI3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE4Mi42MjcgMTIuNzU2N0wxODAuMjMzIDkuMDg2OTlMMTc5LjI1NCAxMC4wODMxVjEyLjc1NjdIMTc2LjQ1OFYwSDE3OS4yNTRWNy4zNzQ0NEwxODIuMzY1IDMuNTgyMzdIMTg1LjMxOEwxODIuMDE1IDcuNTMxNzFMMTg1LjU5OCAxMi43NTY3SDE4Mi42MjdaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTkyLjYxMSAxMi4yNjc0QzE5Mi4zNTUgMTIuMzcyMyAxOTIuMDY5IDEyLjQ3NzEgMTkxLjc1NSAxMi41ODJDMTkxLjQ1MiAxMi42ODY4IDE5MS4xMzIgMTIuNzY4NCAxOTAuNzk0IDEyLjgyNjZDMTkwLjQ1NiAxMi44OTY1IDE5MC4xMjQgMTIuOTMxNSAxODkuNzk4IDEyLjkzMTVDMTg5LjMzMiAxMi45MzE1IDE4OC45MDEgMTIuODU1OCAxODguNTA1IDEyLjcwNDNDMTg4LjEyIDEyLjU0MTIgMTg3LjgxMSAxMi4yNzkxIDE4Ny41NzggMTEuOTE3OUMxODcuMzU3IDExLjU1NjggMTg3LjI0NiAxMS4wNzkxIDE4Ny4yNDYgMTAuNDg1VjUuNjk2ODRIMTg2LjA3NVYzLjU4MjM3SDE4Ny4yNDZWMC42NjQwNDlIMTkwLjA0MlYzLjU4MjM3SDE5MS45MTJWNS42OTY4NEgxOTAuMDQyVjkuNTIzODZDMTkwLjA0MiA5LjgyNjc2IDE5MC4xMTggMTAuMDQ4MSAxOTAuMjY5IDEwLjE4NzlDMTkwLjQyMSAxMC4zMTYxIDE5MC42MTMgMTAuMzgwMSAxOTAuODQ2IDEwLjM4MDFDMTkxLjA0NCAxMC4zODAxIDE5MS4yNTQgMTAuMzQ1MiAxOTEuNDc1IDEwLjI3NTNDMTkxLjcwOCAxMC4yMDU0IDE5MS45MDYgMTAuMTI5NyAxOTIuMDY5IDEwLjA0ODFMMTkyLjYxMSAxMi4yNjc0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE5My44NzUgOS40NTM5NlYzLjU4MjM3SDE5Ni42NzFWOC44NDIzNEMxOTYuNjcxIDkuNDAxNTQgMTk2Ljc4MiA5LjgzMjU5IDE5Ny4wMDMgMTAuMTM1NUMxOTcuMjI1IDEwLjQyNjcgMTk3LjUzOSAxMC41NzI0IDE5Ny45NDcgMTAuNTcyNEMxOTguMjAzIDEwLjU3MjQgMTk4LjQ0OCAxMC41MzE2IDE5OC42ODEgMTAuNDVDMTk4LjkxNCAxMC4zNTY4IDE5OS4xNDEgMTAuMjExMiAxOTkuMzYyIDEwLjAxMzJDMTk5LjU4NCA5LjgxNTExIDE5OS43ODIgOS41NTg4MSAxOTkuOTU3IDkuMjQ0MjZWMy41ODIzN0gyMDIuNzUzVjkuNjQ2MTlDMjAyLjc1MyA5LjkyNTc5IDIwMi43OTMgMTAuMTIzOCAyMDIuODc1IDEwLjI0MDNDMjAyLjk2OCAxMC4zNDUyIDIwMy4xMjUgMTAuNDA5MyAyMDMuMzQ3IDEwLjQzMjZWMTIuNzU2N0MyMDMuMDkgMTIuODAzMyAyMDIuODYzIDEyLjgzODMgMjAyLjY2NSAxMi44NjE2QzIwMi40NzkgMTIuODg0OSAyMDIuMzEgMTIuODk2NSAyMDIuMTU4IDEyLjg5NjVDMjAxLjY2OSAxMi44OTY1IDIwMS4yNzkgMTIuNzk3NSAyMDAuOTg4IDEyLjU5OTVDMjAwLjY5NiAxMi4zODk4IDIwMC41MTYgMTIuMDk4NSAyMDAuNDQ2IDExLjcyNTdMMjAwLjM5NCAxMS4xNjY1QzE5OS45NzQgMTEuNzcyMyAxOTkuNDUgMTIuMjIwOCAxOTguODIxIDEyLjUxMjFDMTk4LjIwMyAxMi43OTE3IDE5Ny41MSAxMi45MzE1IDE5Ni43NDEgMTIuOTMxNUMxOTUuODA5IDEyLjkzMTUgMTk1LjA5OSAxMi42MzQ0IDE5NC42MDkgMTIuMDQwM0MxOTQuMTIgMTEuNDQ2MSAxOTMuODc1IDEwLjU4NCAxOTMuODc1IDkuNDUzOTZaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMjExIDUuOTc2NDRDMjEwLjMyNCA1Ljk3NjQ0IDIwOS43MTMgNi4wODcxMiAyMDkuMTY1IDYuMzA4NDdDMjA4LjYxOCA2LjUxODE3IDIwOC4yMjEgNi44MzI3MiAyMDcuOTc3IDcuMjUyMTJWMTIuNzU2N0gyMDUuMTgxVjMuNTgyMzdIMjA3Ljc1VjUuNDM0NzJDMjA4LjA2NCA0LjgxNzI3IDIwOC40NzIgNC4zMzM3OSAyMDguOTczIDMuOTg0MjlDMjA5LjQ3NCAzLjYzNDggMjA5Ljk5OCAzLjQ1NDIyIDIxMC41NDYgMy40NDI1N0MyMTAuNjc0IDMuNDQyNTcgMjEwLjc2NyAzLjQ0MjU3IDIxMC44MjUgMy40NDI1N0MyMTAuODk1IDMuNDQyNTcgMjEwLjk1MyAzLjQ0ODM5IDIxMSAzLjQ2MDA1VjUuOTc2NDRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTQyLjQyMyAxMi40MzZDMTQxLjY0MiAxMi40MzYgMTQwLjk0OSAxMi4zMTM2IDE0MC4zNDMgMTIuMDY5QzEzOS43MzcgMTEuODEyNyAxMzkuMjE5IDExLjQ2OSAxMzguNzg4IDExLjAzOEMxMzguMzY5IDEwLjYwNjkgMTM4LjA0OCAxMC4xMTE4IDEzNy44MjcgOS41NTI2QzEzNy42MDYgOC45ODE3NSAxMzcuNDk1IDguMzg3NiAxMzcuNDk1IDcuNzcwMTVDMTM3LjQ5NSA2Ljg4NDc2IDEzNy42ODcgNi4wODA5MSAxMzguMDcyIDUuMzU4NjFDMTM4LjQ2OCA0LjYyNDY2IDEzOS4wMzMgNC4wMzYzMyAxMzkuNzY3IDMuNTkzNjNDMTQwLjUwMSAzLjEzOTI4IDE0MS4zODYgMi45MTIxMSAxNDIuNDIzIDIuOTEyMTFDMTQzLjQ2IDIuOTEyMTEgMTQ0LjMzOSAzLjEzMzQ2IDE0NS4wNjIgMy41NzYxNkMxNDUuNzk1IDQuMDE4ODYgMTQ2LjM1NSA0LjYwMTM2IDE0Ni43MzkgNS4zMjM2NkMxNDcuMTI0IDYuMDM0MzEgMTQ3LjMxNiA2LjgwOTAzIDE0Ny4zMTYgNy42NDc4M0MxNDcuMzE2IDcuODEwOTMgMTQ3LjMwNCA3Ljk3NDAzIDE0Ny4yODEgOC4xMzcxM0MxNDcuMjY5IDguMjg4NTggMTQ3LjI1OCA4LjQyMjU1IDE0Ny4yNDYgOC41MzkwNUgxNDAuNDY2QzE0MC41MDEgOC45NDY4IDE0MC42MTEgOS4yOTA0OCAxNDAuNzk4IDkuNTcwMDhDMTQwLjk5NiA5Ljg0OTY4IDE0MS4yNDYgMTAuMDY1MiAxNDEuNTQ5IDEwLjIxNjdDMTQxLjg1MiAxMC4zNTY0IDE0Mi4xNzIgMTAuNDI2NCAxNDIuNTEgMTAuNDI2NEMxNDIuOTMgMTAuNDI2NCAxNDMuMzIgMTAuMzI3MyAxNDMuNjgxIDEwLjEyOTNDMTQ0LjA1NCA5LjkzMTIzIDE0NC4zMSA5LjY2MzI4IDE0NC40NSA5LjMyNTQzTDE0Ni44MjcgOS45ODk0OEMxNDYuNTk0IDEwLjQ2NzEgMTQ2LjI2MSAxMC44OTI0IDE0NS44MyAxMS4yNjUyQzE0NS40MTEgMTEuNjI2MyAxNDQuOTEgMTEuOTExNyAxNDQuMzI4IDEyLjEyMTRDMTQzLjc1NyAxMi4zMzExIDE0My4xMjIgMTIuNDM2IDE0Mi40MjMgMTIuNDM2Wk0xNDAuMzk2IDYuODI2NTFIMTQ0LjM4QzE0NC4zMzMgNi40NDIwNiAxNDQuMjIzIDYuMTEwMDMgMTQ0LjA0OCA1LjgzMDQzQzE0My44NzMgNS41MzkxOCAxNDMuNjQgNS4zMTc4MyAxNDMuMzQ5IDUuMTY2MzhDMTQzLjA1OCA1LjAwMzI4IDE0Mi43MzcgNC45MjE3MyAxNDIuMzg4IDQuOTIxNzNDMTQyLjAyNyA0LjkyMTczIDE0MS43MDEgNS4wMDMyOCAxNDEuNDA5IDUuMTY2MzhDMTQxLjEzIDUuMzE3ODMgMTQwLjkwMiA1LjUzOTE4IDE0MC43MjggNS44MzA0M0MxNDAuNTUzIDYuMTEwMDMgMTQwLjQ0MiA2LjQ0MjA2IDE0MC4zOTYgNi44MjY1MVoiIGZpbGw9IiNFMzE3MzgiLz4KPC9zdmc+Cg==">
                    </div>
                    <div class="header-info-wrapper">
                        <div class="header-info">
                        <span class="label-data-info">
                            <span class="label-data-info--value">Numer faktury</span>
                        </span>
                            <span class="label-data-info">
                            <span class="label-data-info--value2">B0012813-001</span>
                        </span>
                            <span class="label-data-info">
                                <span class="label-data-info--value">Faktura podstawowa</span>
                        </span>

                            <span class="label-data-info">
                            <span class="label-data-info--name">Numer KSeF: </span>
                            <span class="label-data-info--value">9999999999-20230421-14B55E-9080D2-CC</span>
                        </span>

                        </div>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">



                        <span class="section-data__header section-data__header--h1">Sprzedawca</span>


                        <span class="label-data-info">
        <span class="label-data-info--name">Prefiks VAT:</span><span class="label-data-info--value">Polska</span>
    </span>



                        <span class="label-data-info">
        <span class="label-data-info--name">NIP:</span><span class="label-data-info--value">9999999999</span>
    </span>
                        <span class="label-data-info">
        <span class="label-data-info--name">Pełna nazwa:</span><span class="label-data-info--value">LEAR CORPORATION POLAND II SP ZOO</span>
    </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">SERDECZNA</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">40</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">43-100</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">Tychy</span>
        </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres korespondencyjny</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">STREFOWA</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">2</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">43-150</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">BIERUN</span>
        </span>



                        <span class="label-data-info label-data-info--vertical-space">
    <span class="label-data-info--header">Dane kontaktowe</span>
</span>

                        <span class="label-data-info">
        <span class="label-data-info--name">Adres e-mail:</span><span class="label-data-info--value">gmbx-tyc22@lear.com</span>
    </span>

                        <span class="label-data-info">
        <span class="label-data-info--name">Tel.:</span><span class="label-data-info--value">327585200</span>
    </span>
                    </div>
                    <div class="section-data__wrapper-right">



                        <span class="section-data__header section-data__header--h1">Nabywca</span>


                        <span class="label-data-info">
        <span class="label-data-info--name">Prefiks VAT:</span><span class="label-data-info--value">Czechy</span>
    </span>

                        <span class="label-data-info">
            <span class="label-data-info--name">Identyfikator podatkowy inny:</span><span class="label-data-info--value">CZ27534596</span>
        </span>


                        <span class="label-data-info">
        <span class="label-data-info--name">Pełna nazwa:</span><span class="label-data-info--value">GRUPO ANTOLIN OSTRAVA S.R.O.</span>
    </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Kraj:</span><span class="label-data-info--value">Republika Czeska</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">NA ROVINCE</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">917</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">72000</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">OSTRAVA</span>
        </span>


                    </div>

                </div>
                <div class="section-data">


                </div>
                <div class="section-data">

                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Szczegóły</span>


                    <span class="label-data-info label-data-info--half">
                <span class="label-data-info--name">Data wystawienia, z zastrzeżeniem art. 106na ust. 1 ustawy:</span><span class="label-data-info--value">2022-09-20</span>
            </span>







                    <span class="label-data-info label-data-info--half">
                    <span class="label-data-info--name">Kurs waluty wspólny dla wszytkich wierszy faktury</span>
                </span>
                    <span class="label-data-info label-data-info--half">
                    <span class="label-data-info--name">Kurs waluty:</span><span class="label-data-info--value">4,7142</span>
                </span>


                </div>
                <div class="section-data">
                </div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--table">Dodatkowy opis</span>
                    <table class="table-basic table-basic--auto">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--medium-size">Rodzaj informacji</th>
                            <th class="table-basic__header table-basic__header--medium-size">Treść informacji</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">EQUIVALENT</td>
                            <td class="table-basic__cell">2131.3500 M2</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">TOTAL NET WEIGHT</td>
                            <td class="table-basic__cell">584.200 KILOGRAMS</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">TOTAL GROSS WEIGHT</td>
                            <td class="table-basic__cell">616.200 KILOGRAMS</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">COUNTRY OF ORIGIN</td>
                            <td class="table-basic__cell">GB</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Pozycje</span>

                    <span class="label-data-info">
        <span class="label-data-info--name">Faktura wystawiona w cenach netto w walucie EUR</span>
    </span>

                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>
                            <th class="table-basic__header">Nazwa towaru lub usługi</th>
                            <th class="table-basic__header">Cena jedn. netto</th>
                            <th class="table-basic__header">ilość</th>

                            <th class="table-basic__header">Jedn.</th>
                            <th class="table-basic__header">Stawka podatku</th>
                            <th class="table-basic__header">Wartość sprzedaży netto</th>
                            <th class="table-basic__header">Kurs waluty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">100123580-006, STEP 3 4.0 MM</td>
                            <td class="table-basic__cell table-basic__cell--to-right">7,67</td>
                            <td class="table-basic__cell table-basic__cell--to-right">1420,9</td>

                            <td class="table-basic__cell">MR</td>

                            <td class="table-basic__cell">0%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">10&nbsp;898,30</td>
                            <td class="table-basic__cell table-basic__cell--to-right">4,71</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>


                            <th class="table-basic__header">CN</th>






                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">59032090</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="label-data-info label-data-info--right">
                        <span class="label-data-info--name2">Kwota należności ogółem:</span>
                        <span class="label-data-info--value2">10&nbsp;898,30&nbsp;EUR</span>
                    </div>

                </div>
                <div class="section-data">
                    <div class="line-basic"></div>

                    <span class="section-data__header section-data__header--h1">Podsumowanie stawek podatku</span>

                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>
                            <th class="table-basic__header">Stawka podatku</th>
                            <th class="table-basic__header">Kwota netto</th>
                            <th class="table-basic__header">Kwota podatku</th>
                            <th class="table-basic__header">Kwota brutto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">0%</td>

                            <td class="table-basic__cell table-basic__cell--to-right">10&nbsp;898,30</td>

                            <td class="table-basic__cell table-basic__cell--to-right">0,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">10&nbsp;898,30</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Płatność</span>


                </div>
                <div class="section-data">
                    <div class="section-data__wrapper-left">
                        <div class="keep-together to-left to-left--with-margin">
                            <table class="table-basic table-basic--wide">
                                <thead>
                                <tr>
                                    <th class="table-basic__header">Termin płatności</th>
                                    <th class="table-basic__header">Opis płatności</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="table-basic__cell">2022-10-30</td>
                                    <td class="table-basic__cell">NET, 1-31 PAYABLE FOLLOWING 30TH</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">

                        <span class="section-data__header section-data__header--h1">Numer rachunku bankowego faktora </span>


                        <table class="table-basic">
                            <tbody>
                            <tr>
                                <th class="table-basic__header">Format rachunku</th>
                                <td class="table-basic__cell">Polski</td>
                            </tr>

                            <tr>
                                <th class="table-basic__header">Pełny numer rachunku w standardzie NRB</th>
                                <td class="table-basic__cell">05103015080000000501184235</td>
                            </tr>




                            <tr>
                                <th class="table-basic__header">Nazwa banku</th>
                                <td class="table-basic__cell">CITI HANDLOWY</td>
                            </tr>
                            </tbody>
                        </table>        </div>
                    <div class="section-data__wrapper-right">

                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Warunki transakcji</span>
                    <div class="section-data__wrapper-left">
                        <div class="keep-together to-left to-left--with-margin">
                            <span class="section-data__header section-data__header--table">Zamówienie</span>

                            <table class="table-basic table-basic--wide">
                                <thead>
                                <tr>
                                    <th class="table-basic__header">Data zamówienia</th>
                                    <th class="table-basic__header">Numer zamówienia</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="table-basic__cell"></td>
                                    <td class="table-basic__cell">20086289</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="section-data">
        <span class="label-data-info">
            <span class="label-data-info--name">Warunki dostawy towarów:</span><span class="label-data-info--value">FCA-BIERUN</span>
        </span>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--table">Numery dokumentów magazynowych WZ</span>

                    <table class="table-basic table-basic--auto">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--medium-size">Numer WZ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">PL015418</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--h1">Rejestry</span>

                    <table class="table-basic table-basic--auto">
                        <thead>
                        <tr>
                            <th class="table-basic__header">Pełna nazwa</th>
                            <th class="table-basic__header">KRS</th>
                            <th class="table-basic__header">REGON</th>
                            <th class="table-basic__header">BDO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">LEAR CORPORATION POLAND II SP ZOO</td>
                            <td class="table-basic__cell">0000085748</td>
                            <td class="table-basic__cell">273391026</td>
                            <td class="table-basic__cell">00006462</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-data">
                    <span class="section-data__header section-data__header--h1">Pozostałe informacje</span>

                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--medium-size">Stopka faktury</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">VAT exempt. supply of goods Art.138 EU-Directive</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">TEXTILE FABRIC COATED, COVERED OR LAMINATED WITH POLYURETHANE (MATERIAL ZLAMINOWANY DO PRODUKCJI POSZYC SAMOCHODOWYCH)</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">SHIP TOO:
                                GRUPO ANTOLIN OSTRAVA S.R.O.
                                NA ROVINCE 8129, OSTRAVA
                                720 00 OSTRAVA-HRABOVA
                                CZECH REPUBLIC
                                VAT: CZ27534596</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
            <span class="label-data-info">
                <span class="label-data-info--name">Wytworzona w:</span><span class="label-data-info--value">Aplikacja Podatnika KSeF</span>
            </span>
                </div>
            </div>
        </div>
    </div>

    <div id="modalInvoice3" class="modal none">
        <div class="modal-content" id="modalInvoice3Content">
            <div class="close-modal">X</div>
            <div class="invoice-box">
                <div class="main-header">
                    <div class="ksef-title-wrapper">
                        <img height="27" alt="logo" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjExIiBoZWlnaHQ9IjE3IiB2aWV3Qm94PSIwIDAgMjExIDE3IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMCAxMi43NTY3VjAuMzY2OTc0SDEuNTcyNzVWNy4yMTcxN0w3Ljk2ODU5IDAuMzQ5NDk5SDkuNjYzNjZMNC42ODMyOSA1LjgxOTE3TDkuOTQzMjYgMTIuNzU2N0g4LjE3ODI5TDMuNjg3MjIgNi43NjI4MkwxLjU3Mjc1IDguOTY0NjZWMTIuNzU2N0gwWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE2LjI0MDMgNC45ODAzN0MxNS40NzE0IDQuOTkyMDIgMTQuNzg5OCA1LjE5MDA3IDE0LjE5NTcgNS41NzQ1MkMxMy42MTMyIDUuOTQ3MzIgMTMuMTk5NiA2LjQ2NTc0IDEyLjk1NSA3LjEyOTc5VjEyLjc1NjdIMTEuNDE3MlYzLjYzNDhIMTIuODUwMVY1Ljc0OTI3QzEzLjE2NDcgNS4xMjAxNyAxMy41NzgyIDQuNjEzMzkgMTQuMDkwOCA0LjIyODk0QzE0LjYxNTEgMy44MzI4NSAxNS4xNjI2IDMuNjExNSAxNS43MzM1IDMuNTY0OUMxNS44NSAzLjU2NDkgMTUuOTQ5IDMuNTY0OSAxNi4wMzA2IDMuNTY0OUMxNi4xMTIxIDMuNTY0OSAxNi4xODIgMy41NzA3MiAxNi4yNDAzIDMuNTgyMzdWNC45ODAzN1oiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0xNy4zMTExIDEwLjExOEMxNy4zMTExIDkuNTM1NTEgMTcuNDc0MiA5LjAzNDU2IDE3LjgwMDQgOC42MTUxNkMxOC4xMzgzIDguMTg0MTEgMTguNTk4NSA3Ljg1MjA5IDE5LjE4MSA3LjYxOTA5QzE5Ljc2MzUgNy4zODYwOSAyMC40MzkyIDcuMjY5NTkgMjEuMjA4MSA3LjI2OTU5QzIxLjYxNTggNy4yNjk1OSAyMi4wNDY5IDcuMzA0NTQgMjIuNTAxMiA3LjM3NDQ0QzIyLjk1NTYgNy40MzI2OSAyMy4zNTc1IDcuNTI1ODkgMjMuNzA3IDcuNjU0MDRWNi45ODk5OUMyMy43MDcgNi4yOTA5OSAyMy40OTczIDUuNzQzNDQgMjMuMDc3OSA1LjM0NzM0QzIyLjY1ODUgNC45Mzk1OSAyMi4wNjQzIDQuNzM1NzIgMjEuMjk1NCA0LjczNTcyQzIwLjc5NDUgNC43MzU3MiAyMC4zMTEgNC44Mjg5MiAxOS44NDUgNS4wMTUzMkMxOS4zOTA3IDUuMTkwMDcgMTguOTA3MiA1LjQ0NjM3IDE4LjM5NDYgNS43ODQyMkwxNy44MzU0IDQuNzAwNzdDMTguNDI5NSA0LjI5MzAyIDE5LjAyMzcgMy45OTAxMiAxOS42MTc4IDMuNzkyMDdDMjAuMjEyIDMuNTgyMzcgMjAuODI5NCAzLjQ3NzUyIDIxLjQ3MDIgMy40Nzc1MkMyMi42MzUyIDMuNDc3NTIgMjMuNTU1NSAzLjgwMzcyIDI0LjIzMTIgNC40NTYxMkMyNC45MDY5IDUuMDk2ODcgMjUuMjQ0OCA1Ljk5MzkyIDI1LjI0NDggNy4xNDcyN1YxMS4wMDkyQzI1LjI0NDggMTEuMTk1NiAyNS4yNzk3IDExLjMzNTQgMjUuMzQ5NiAxMS40Mjg2QzI1LjQzMTIgMTEuNTEwMiAyNS41NTkzIDExLjU1NjggMjUuNzM0MSAxMS41Njg0VjEyLjc1NjdDMjUuNTgyNiAxMi43OCAyNS40NDg3IDEyLjc5NzUgMjUuMzMyMiAxMi44MDkyQzI1LjIyNzMgMTIuODIwOCAyNS4xMzk5IDEyLjgyNjYgMjUuMDcgMTIuODI2NkMyNC43MDg5IDEyLjgyNjYgMjQuNDM1MSAxMi43Mjc2IDI0LjI0ODcgMTIuNTI5NkMyNC4wNzQgMTIuMzMxNSAyMy45NzQ5IDEyLjEyMTggMjMuOTUxNiAxMS45MDA1TDIzLjkxNjcgMTEuMzIzOEMyMy41MjA2IDExLjgzNjQgMjMuMDAyMiAxMi4yMzI1IDIyLjM2MTQgMTIuNTEyMUMyMS43MjA3IDEyLjc5MTcgMjEuMDg1NyAxMi45MzE1IDIwLjQ1NjYgMTIuOTMxNUMxOS44NTA4IDEyLjkzMTUgMTkuMzA5MSAxMi44MDkyIDE4LjgzMTUgMTIuNTY0NUMxOC4zNTM4IDEyLjMwODIgMTcuOTgxIDExLjk3MDQgMTcuNzEzMSAxMS41NTFDMTcuNDQ1MSAxMS4xMTk5IDE3LjMxMTEgMTAuNjQyMyAxNy4zMTExIDEwLjExOFpNMjMuMjUyNiAxMC43NjQ2QzIzLjM5MjQgMTAuNjAxNSAyMy41MDMxIDEwLjQzODQgMjMuNTg0NyAxMC4yNzUzQzIzLjY2NjIgMTAuMTAwNSAyMy43MDcgOS45NTQ5MSAyMy43MDcgOS44Mzg0MVY4LjcwMjU0QzIzLjM0NTggOC41NjI3NCAyMi45NjcyIDguNDU3ODkgMjIuNTcxMSA4LjM4Nzk5QzIyLjE3NSA4LjMwNjQ0IDIxLjc4NDcgOC4yNjU2NyAyMS40MDAzIDguMjY1NjdDMjAuNjE5NyA4LjI2NTY3IDE5Ljk4NDggOC40MjI5NCAxOS40OTU1IDguNzM3NDlDMTkuMDE3OSA5LjA0MDM5IDE4Ljc3OSA5LjQ1OTc5IDE4Ljc3OSA5Ljk5NTY5QzE4Ljc3OSAxMC4yODY5IDE4Ljg1NDggMTAuNTcyNCAxOS4wMDYyIDEwLjg1MkMxOS4xNjkzIDExLjExOTkgMTkuNDAyMyAxMS4zNDEzIDE5LjcwNTIgMTEuNTE2QzIwLjAxOTggMTEuNjkwOCAyMC40MDQyIDExLjc3ODEgMjAuODU4NiAxMS43NzgxQzIxLjMzNjIgMTEuNzc4MSAyMS43OTA2IDExLjY4NDkgMjIuMjIxNiAxMS40OTg1QzIyLjY1MjcgMTEuMzAwNSAyMi45OTYzIDExLjA1NTggMjMuMjUyNiAxMC43NjQ2WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTI2Ljc5NSAxNi4wMDcxQzI2LjM5ODkgMTYuMDA3MSAyNi4wMjAzIDE1Ljk0ODggMjUuNjU5MSAxNS44MzIzQzI1LjI5OCAxNS43MTU4IDI0Ljk3NzYgMTUuNTI5NCAyNC42OTggMTUuMjczMUwyNS40MTQ1IDE0LjI0MjFDMjUuNTc3NiAxNC4zOTM2IDI1Ljc2OTggMTQuNDk4NCAyNS45OTEyIDE0LjU1NjdDMjYuMjAwOSAxNC42MTQ5IDI2LjQxMDYgMTQuNjQ0IDI2LjYyMDMgMTQuNjQ0QzI2Ljg3NjYgMTQuNjQ0IDI3LjExNTQgMTQuNTggMjcuMzM2NyAxNC40NTE4QzI3LjU1ODEgMTQuMzIzNyAyNy43Mzg3IDE0LjE0MzEgMjcuODc4NSAxMy45MTAxQzI4LjAxODMgMTMuNjg4NyAyOC4wODgyIDEzLjQzODMgMjguMDg4MiAxMy4xNTg3VjMuNjM0OEgyOS42MjZWMTMuMDUzOEMyOS42MjYgMTMuNjI0NyAyOS40OTIgMTQuMTMxNCAyOS4yMjQgMTQuNTc0MUMyOC45NTYxIDE1LjAyODUgMjguNjA2NiAxNS4zNzggMjguMTc1NSAxNS42MjI2QzI3Ljc1NjEgMTUuODc4OSAyNy4yOTYgMTYuMDA3MSAyNi43OTUgMTYuMDA3MVpNMjguMDg4MiAxLjkyMjI1VjBIMjkuNjI2VjEuOTIyMjVIMjguMDg4MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik0zNi4zNTkxIDEyLjkzMTVDMzUuNjcxOCAxMi45MzE1IDM1LjA0ODUgMTIuODA5MiAzNC40ODkzIDEyLjU2NDVDMzMuOTMwMSAxMi4zMDgyIDMzLjQ0NjcgMTEuOTY0NSAzMy4wMzg5IDExLjUzMzVDMzIuNjMxMiAxMS4wOTA4IDMyLjMxNjYgMTAuNTg0IDMyLjA5NTMgMTAuMDEzMkMzMS44NzM5IDkuNDQyMzEgMzEuNzYzMiA4Ljg0MjM0IDMxLjc2MzIgOC4yMTMyNEMzMS43NjMyIDcuNTcyNDkgMzEuODczOSA2Ljk2NjY5IDMyLjA5NTMgNi4zOTU4NEMzMi4zMTY2IDUuODI0OTkgMzIuNjMxMiA1LjMyNDA0IDMzLjAzODkgNC44OTI5OUMzMy40NDY3IDQuNDUwMjkgMzMuOTMwMSA0LjEwNjYyIDM0LjQ4OTMgMy44NjE5N0MzNS4wNjAyIDMuNjA1NjcgMzUuNjgzNCAzLjQ3NzUyIDM2LjM1OTEgMy40Nzc1MkMzNy4wNDY1IDMuNDc3NTIgMzcuNjY5OCAzLjYwNTY3IDM4LjIyOSAzLjg2MTk3QzM4Ljc4ODIgNC4xMDY2MiAzOS4yNzE2IDQuNDUwMjkgMzkuNjc5NCA0Ljg5Mjk5QzQwLjA5ODggNS4zMjQwNCA0MC40MTkyIDUuODI0OTkgNDAuNjQwNSA2LjM5NTg0QzQwLjg2MTkgNi45NjY2OSA0MC45NzI1IDcuNTcyNDkgNDAuOTcyNSA4LjIxMzI0QzQwLjk3MjUgOC44NDIzNCA0MC44NjE5IDkuNDQyMzEgNDAuNjQwNSAxMC4wMTMyQzQwLjQxOTIgMTAuNTg0IDQwLjEwNDYgMTEuMDkwOCAzOS42OTY5IDExLjUzMzVDMzkuMjg5MSAxMS45NjQ1IDM4Ljc5OTggMTIuMzA4MiAzOC4yMjkgMTIuNTY0NUMzNy42Njk4IDEyLjgwOTIgMzcuMDQ2NSAxMi45MzE1IDM2LjM1OTEgMTIuOTMxNVpNMzMuMzM2IDguMjMwNzFDMzMuMzM2IDguODU5ODEgMzMuNDcgOS40MzA2NiAzMy43Mzc5IDkuOTQzMjZDMzQuMDE3NSAxMC40NTU5IDM0LjM4NDUgMTAuODYzNiAzNC44Mzg4IDExLjE2NjVDMzUuMjkzMiAxMS40NTc4IDM1Ljc5OTkgMTEuNjAzNCAzNi4zNTkxIDExLjYwMzRDMzYuOTE4MyAxMS42MDM0IDM3LjQyNTEgMTEuNDUxOSAzNy44Nzk1IDExLjE0OUMzOC4zNDU1IDEwLjg0NjEgMzguNzEyNCAxMC40Mzg0IDM4Ljk4MDQgOS45MjU3OUMzOS4yNiA5LjQwMTU0IDM5LjM5OTggOC44MjQ4NiAzOS4zOTk4IDguMTk1NzdDMzkuMzk5OCA3LjU2NjY3IDM5LjI2IDYuOTk1ODIgMzguOTgwNCA2LjQ4MzIyQzM4LjcxMjQgNS45NzA2MiAzOC4zNDU1IDUuNTYyODcgMzcuODc5NSA1LjI1OTk3QzM3LjQyNTEgNC45NTcwNyAzNi45MTgzIDQuODA1NjIgMzYuMzU5MSA0LjgwNTYyQzM1Ljc5OTkgNC44MDU2MiAzNS4yOTMyIDQuOTYyODkgMzQuODM4OCA1LjI3NzQ0QzM0LjM4NDUgNS41ODAzNCAzNC4wMTc1IDUuOTg4MDkgMzMuNzM3OSA2LjUwMDY5QzMzLjQ3IDcuMDEzMjkgMzMuMzM2IDcuNTg5OTcgMzMuMzM2IDguMjMwNzFaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNNTQuMjE5NSAzLjYzNDhINTUuNzA0OUw1MS44MjU1IDEyLjc1NjdINTAuNDc5OUw0OC43MTQ5IDguNDU3ODlMNDYuOTY3NCAxMi43NTY3SDQ1LjYyMThMNDEuNzQyNCAzLjYzNDhINDMuMjEwM0w0Ni4zNTU4IDExLjIzNjRMNDcuODIzNyA3LjQ5Njc3TDQ2LjI4NTkgMy42NTIyN0g0Ny42MzE1TDQ4LjcxNDkgNi41NTMxMkw0OS43OTg0IDMuNjUyMjdINTEuMTQzOUw0OS42MjM2IDcuNDk2NzdMNTEuMDkxNSAxMS4yMzY0TDU0LjIxOTUgMy42MzQ4WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTU3LjgyNDQgMTUuMjM4MkM1Ny45NzU5IDE1LjI0OTggNTguMTI3MyAxNS4yNjE1IDU4LjI3ODggMTUuMjczMUM1OC40MzAyIDE1LjI5NjQgNTguNTQ2NyAxNS4zMDgxIDU4LjYyODMgMTUuMzA4MUM1OC44MTQ3IDE1LjMwODEgNTguOTc3OCAxNS4yNDQgNTkuMTE3NiAxNS4xMTU5QzU5LjI1NzQgMTQuOTg3NyA1OS40MDg4IDE0LjczNzIgNTkuNTcxOSAxNC4zNjQ0QzU5Ljc0NjcgMTQuMDAzMyA1OS45NjggMTMuNDY3NCA2MC4yMzYgMTIuNzU2N0w1Ni4zNzQgMy42MzQ4SDU3Ljk5OTJMNjEuMDc0OCAxMS4yMDE1TDYzLjg1MzMgMy42MzQ4SDY1LjM3MzZMNjAuOTM1IDE1LjE1MDhDNjAuODMwMSAxNS40MTg4IDYwLjY3MjggMTUuNjY5MiA2MC40NjMxIDE1LjkwMjJDNjAuMjY1MSAxNi4xNDY5IDYwLjAwODggMTYuMzM5MSA1OS42OTQyIDE2LjQ3ODlDNTkuMzc5NyAxNi42MTg3IDU5LjAwMTEgMTYuNjg4NiA1OC41NTg0IDE2LjY4ODZDNTguNDUzNSAxNi42ODg2IDU4LjM0MjggMTYuNjgyOCA1OC4yMjYzIDE2LjY3MTFDNTguMTIxNSAxNi42NTk1IDU3Ljk4NzUgMTYuNjM2MiA1Ny44MjQ0IDE2LjYwMTJWMTUuMjM4MloiIGZpbGw9ImJsYWNrIi8+CjxwYXRoIGQ9Ik03OC45MjU2IDIuOTUzMjdDNzguNzg1OCAyLjc5MDE3IDc4LjU5OTQgMi42MzI5IDc4LjM2NjQgMi40ODE0NUM3OC4xMzM0IDIuMzMgNzcuODcxMyAyLjE5NjAyIDc3LjU4IDIuMDc5NTJDNzcuMjg4OCAxLjk1MTM3IDc2Ljk2ODQgMS44NTIzNSA3Ni42MTg5IDEuNzgyNDVDNzYuMjgxMSAxLjcwMDkgNzUuOTI1NyAxLjY2MDEyIDc1LjU1MjkgMS42NjAxMkM3NC41OTc2IDEuNjYwMTIgNzMuODkyOCAxLjg0MDcgNzMuNDM4NSAyLjIwMTg1QzcyLjk4NDEgMi41NjMgNzIuNzU2OSAzLjA1ODEyIDcyLjc1NjkgMy42ODcyMkM3Mi43NTY5IDQuMTI5OTIgNzIuODczNCA0LjQ3OTQyIDczLjEwNjQgNC43MzU3MkM3My4zMzk0IDQuOTkyMDIgNzMuNjk0OCA1LjIwMTcyIDc0LjE3MjQgNS4zNjQ4MkM3NC42NjE3IDUuNTI3OTIgNzUuMjc5MiA1LjY5Njg0IDc2LjAyNDcgNS44NzE1OUM3Ni44ODY4IDYuMDU3OTkgNzcuNjMyNSA2LjI4NTE3IDc4LjI2MTYgNi41NTMxMkM3OC44OTA2IDYuODIxMDcgNzkuMzc0MSA3LjE4MjIyIDc5LjcxMiA3LjYzNjU3QzgwLjA0OTggOC4wNzkyNiA4MC4yMTg4IDguNjczNDEgODAuMjE4OCA5LjQxOTAxQzgwLjIxODggMTAuMDEzMiA4MC4xMDIyIDEwLjUzMTYgNzkuODY5MiAxMC45NzQzQzc5LjY0NzkgMTEuNDA1MyA3OS4zMzMzIDExLjc2NjUgNzguOTI1NiAxMi4wNTc3Qzc4LjUxNzggMTIuMzM3MyA3OC4wNDAyIDEyLjU0NyA3Ny40OTI3IDEyLjY4NjhDNzYuOTQ1MSAxMi44MTUgNzYuMzUxIDEyLjg3OTEgNzUuNzEwMiAxMi44NzkxQzc1LjA4MTEgMTIuODc5MSA3NC40NjM2IDEyLjgxNSA3My44NTc4IDEyLjY4NjhDNzMuMjYzNyAxMi41NDcgNzIuNjk4NyAxMi4zNDkgNzIuMTYyOCAxMi4wOTI3QzcxLjYyNjkgMTEuODM2NCA3MS4xMjU5IDExLjUxNiA3MC42NTk5IDExLjEzMTZMNzEuNDExNCA5LjgwMzQ2QzcxLjU5NzggMTAuMDAxNSA3MS44MzY2IDEwLjE5OTYgNzIuMTI3OCAxMC4zOTc2QzcyLjQzMDcgMTAuNTg0IDcyLjc2ODYgMTAuNzU4OCA3My4xNDE0IDEwLjkyMTlDNzMuNTI1OCAxMS4wODUgNzMuOTM5NCAxMS4yMTg5IDc0LjM4MjEgMTEuMzIzOEM3NC44MjQ4IDExLjQxNyA3NS4yNzkyIDExLjQ2MzYgNzUuNzQ1MiAxMS40NjM2Qzc2LjYzMDYgMTEuNDYzNiA3Ny4zMTc5IDExLjMwNjMgNzcuODA3MiAxMC45OTE4Qzc4LjI5NjUgMTAuNjY1NiA3OC41NDEyIDEwLjE5MzcgNzguNTQxMiA5LjU3NjI5Qzc4LjU0MTIgOS4xMTAyOSA3OC40MDEzIDguNzM3NDkgNzguMTIxNyA4LjQ1Nzg5Qzc3Ljg1MzggOC4xNzgyOSA3Ny40NTE5IDcuOTQ1MjkgNzYuOTE2IDcuNzU4ODlDNzYuMzgwMSA3LjU3MjQ5IDc1LjcyNzcgNy4zODYwOSA3NC45NTg4IDcuMTk5NjlDNzQuMTIgNi45ODk5OSA3My40MTUyIDYuNzYyODIgNzIuODQ0MyA2LjUxODE3QzcyLjI3MzUgNi4yNjE4NyA3MS44NDI0IDUuOTI5ODQgNzEuNTUxMiA1LjUyMjA5QzcxLjI3MTYgNS4xMTQzNCA3MS4xMzE4IDQuNTg0MjcgNzEuMTMxOCAzLjkzMTg3QzcxLjEzMTggMy4xMzk2NyA3MS4zMjQgMi40Njk4IDcxLjcwODQgMS45MjIyNUM3Mi4wOTI5IDEuMzc0NyA3Mi42MjMgMC45NjExMjMgNzMuMjk4NyAwLjY4MTUyNEM3My45NzQ0IDAuNDAxOTI0IDc0LjczNzQgMC4yNjIxMjUgNzUuNTg3OSAwLjI2MjEyNUM3Ni4xNDcxIDAuMjYyMTI1IDc2LjY2NTUgMC4zMjAzNzQgNzcuMTQzMiAwLjQzNjg3NEM3Ny42MzI1IDAuNTUzMzc0IDc4LjA4NjggMC43MTY0NzQgNzguNTA2MiAwLjkyNjE3M0M3OC45MjU2IDEuMTM1ODcgNzkuMzEgMS4zODYzNSA3OS42NTk1IDEuNjc3Nkw3OC45MjU2IDIuOTUzMjdaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNODIuNDM0MSAxNS4yMzgyQzgyLjU4NTYgMTUuMjQ5OCA4Mi43MzcgMTUuMjYxNSA4Mi44ODg1IDE1LjI3MzFDODMuMDM5OSAxNS4yOTY0IDgzLjE1NjQgMTUuMzA4MSA4My4yMzggMTUuMzA4MUM4My40MjQ0IDE1LjMwODEgODMuNTg3NSAxNS4yNDQgODMuNzI3MyAxNS4xMTU5QzgzLjg2NzEgMTQuOTg3NyA4NC4wMTg1IDE0LjczNzIgODQuMTgxNiAxNC4zNjQ0Qzg0LjM1NjQgMTQuMDAzMyA4NC41Nzc3IDEzLjQ2NzQgODQuODQ1NyAxMi43NTY3TDgwLjk4MzcgMy42MzQ4SDgyLjYwODlMODUuNjg0NSAxMS4yMDE1TDg4LjQ2MyAzLjYzNDhIODkuOTgzM0w4NS41NDQ3IDE1LjE1MDhDODUuNDM5OCAxNS40MTg4IDg1LjI4MjUgMTUuNjY5MiA4NS4wNzI4IDE1LjkwMjJDODQuODc0OCAxNi4xNDY5IDg0LjYxODUgMTYuMzM5MSA4NC4zMDM5IDE2LjQ3ODlDODMuOTg5NCAxNi42MTg3IDgzLjYxMDggMTYuNjg4NiA4My4xNjgxIDE2LjY4ODZDODMuMDYzMiAxNi42ODg2IDgyLjk1MjUgMTYuNjgyOCA4Mi44MzYgMTYuNjcxMUM4Mi43MzEyIDE2LjY1OTUgODIuNTk3MiAxNi42MzYyIDgyLjQzNDEgMTYuNjAxMlYxNS4yMzgyWiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTk0LjY4ODQgMTIuOTMxNUM5My45MzEyIDEyLjkzMTUgOTMuMjIwNSAxMi44MDkyIDkyLjU1NjUgMTIuNTY0NUM5MS44OTI0IDEyLjMwODIgOTEuMzIxNiAxMS45Mjk2IDkwLjg0MzkgMTEuNDI4Nkw5MS40MzgxIDEwLjM0NTJDOTEuOTYyMyAxMC44MzQ1IDkyLjQ4NjYgMTEuMTg0IDkzLjAxMDggMTEuMzkzN0M5My41MzUxIDExLjYwMzQgOTQuMDcxIDExLjcwODIgOTQuNjE4NSAxMS43MDgyQzk1LjI0NzYgMTEuNzA4MiA5NS43NjAyIDExLjU5MTcgOTYuMTU2MyAxMS4zNTg3Qzk2LjU1MjQgMTEuMTE0MSA5Ni43NTA1IDEwLjc1ODggOTYuNzUwNSAxMC4yOTI4Qzk2Ljc1MDUgOS45NTQ5MSA5Ni42NDU2IDkuNzA0NDQgOTYuNDM1OSA5LjU0MTM0Qzk2LjIzNzkgOS4zNzgyNCA5NS45NTI1IDkuMjQ0MjYgOTUuNTc5NyA5LjEzOTQxQzk1LjIwNjkgOS4wMjI5MSA5NC43NjQyIDguODk0NzYgOTQuMjUxNiA4Ljc1NDk2QzkzLjYyMjUgOC41Njg1NiA5My4wOTI0IDguMzcwNTIgOTIuNjYxMyA4LjE2MDgyQzkyLjIzMDMgNy45NTExMiA5MS45MDQxIDcuNjg4OTkgOTEuNjgyNyA3LjM3NDQ0QzkxLjQ2MTQgNy4wNTk4OSA5MS4zNTA3IDYuNjYzNzkgOTEuMzUwNyA2LjE4NjE0QzkxLjM1MDcgNS42MDM2NCA5MS41MDIyIDUuMTE0MzQgOTEuODA1MSA0LjcxODI0QzkyLjEwOCA0LjMxMDQ5IDkyLjUyMTUgNC4wMDE3NyA5My4wNDU4IDMuNzkyMDdDOTMuNTgxNyAzLjU4MjM3IDk0LjE4NzUgMy40Nzc1MiA5NC44NjMyIDMuNDc3NTJDOTUuNTM4OSAzLjQ3NzUyIDk2LjE1MDUgMy41ODIzNyA5Ni42OTgxIDMuNzkyMDdDOTcuMjQ1NiA0LjAwMTc3IDk3LjcxNzQgNC4zMTA0OSA5OC4xMTM1IDQuNzE4MjRMOTcuNDE0NSA1Ljc4NDIyQzk3LjA1MzQgNS40MTE0MiA5Ni42NTczIDUuMTM3NjQgOTYuMjI2MiA0Ljk2Mjg5Qzk1Ljc5NTIgNC43NzY0OSA5NS4zMTE3IDQuNjgzMjkgOTQuNzc1OCA0LjY4MzI5Qzk0LjQ2MTMgNC42ODMyOSA5NC4xNTI1IDQuNzI0MDcgOTMuODQ5NiA0LjgwNTYyQzkzLjU0NjcgNC44NzU1MiA5My4yOTYzIDUuMDA5NDkgOTMuMDk4MiA1LjIwNzU0QzkyLjkwMDIgNS4zOTM5NCA5Mi44MDExIDUuNjYxODkgOTIuODAxMSA2LjAxMTM5QzkyLjgwMTEgNi4zMDI2NCA5Mi44NzY5IDYuNTM1NjQgOTMuMDI4MyA2LjcxMDM5QzkzLjE5MTQgNi44NzM0OSA5My40MjQ0IDcuMDEzMjkgOTMuNzI3MyA3LjEyOTc5Qzk0LjA0MTkgNy4yNDYyOSA5NC40MjA1IDcuMzc0NDQgOTQuODYzMiA3LjUxNDI0Qzk1LjU1MDUgNy43MTIyOSA5Ni4xNDQ3IDcuOTEwMzQgOTYuNjQ1NiA4LjEwODM5Qzk3LjE1ODIgOC4zMDY0NCA5Ny41NTQzIDguNTYyNzQgOTcuODMzOSA4Ljg3NzI5Qzk4LjExMzUgOS4xOTE4NCA5OC4yNTMzIDkuNjI4NzEgOTguMjUzMyAxMC4xODc5Qzk4LjI1MzMgMTEuMDUgOTcuOTI3MSAxMS43MjU3IDk3LjI3NDcgMTIuMjE1Qzk2LjYyMjMgMTIuNjkyNyA5NS43NjAyIDEyLjkzMTUgOTQuNjg4NCAxMi45MzE1WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEwNS4wNzMgMTIuMzAyNEMxMDQuOTQ1IDEyLjM2MDYgMTA0Ljc3MSAxMi40MzY0IDEwNC41NDkgMTIuNTI5NkMxMDQuMzI4IDEyLjYyMjggMTA0LjA3MiAxMi43MDQzIDEwMy43OCAxMi43NzQyQzEwMy40ODkgMTIuODQ0MSAxMDMuMTggMTIuODc5MSAxMDIuODU0IDEyLjg3OTFDMTAyLjQ4MSAxMi44NzkxIDEwMi4xMzggMTIuODE1IDEwMS44MjMgMTIuNjg2OEMxMDEuNTA5IDEyLjU0NyAxMDEuMjU4IDEyLjMzNzMgMTAxLjA3MiAxMi4wNTc3QzEwMC44ODUgMTEuNzY2NSAxMDAuNzkyIDExLjQwNTMgMTAwLjc5MiAxMC45NzQzVjQuODQwNTdIOTkuNTUxNFYzLjYzNDhIMTAwLjc5MlYwLjU5NDE0OUgxMDIuMzNWMy42MzQ4SDEwNC4zNzRWNC44NDA1N0gxMDIuMzNWMTAuNTAyNUMxMDIuMzUzIDEwLjgyODcgMTAyLjQ2NCAxMS4wNzMzIDEwMi42NjIgMTEuMjM2NEMxMDIuODYgMTEuMzg3OSAxMDMuMDkzIDExLjQ2MzYgMTAzLjM2MSAxMS40NjM2QzEwMy42NjQgMTEuNDYzNiAxMDMuOTQzIDExLjQxMTIgMTA0LjIgMTEuMzA2M0MxMDQuNDU2IDExLjIwMTUgMTA0LjYyNSAxMS4xMjU3IDEwNC43MDcgMTEuMDc5MUwxMDUuMDczIDEyLjMwMjRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTEwLjY3OCAxMi45MzE1QzEwOS45OTEgMTIuOTMxNSAxMDkuMzYyIDEyLjgwOTIgMTA4Ljc5MSAxMi41NjQ1QzEwOC4yMzIgMTIuMzA4MiAxMDcuNzQyIDExLjk2NDUgMTA3LjMyMyAxMS41MzM1QzEwNi45MTUgMTEuMDkwOCAxMDYuNTk1IDEwLjU4NCAxMDYuMzYyIDEwLjAxMzJDMTA2LjE0MSA5LjQ0MjMxIDEwNi4wMyA4LjgzNjUxIDEwNi4wMyA4LjE5NTc3QzEwNi4wMyA3LjMzMzY3IDEwNi4yMjggNi41NDcyOSAxMDYuNjI0IDUuODM2NjRDMTA3LjAyIDUuMTI1OTkgMTA3LjU2OCA0LjU1NTE0IDEwOC4yNjcgNC4xMjQxQzEwOC45NzcgMy42OTMwNSAxMDkuNzg3IDMuNDc3NTIgMTEwLjY5NiAzLjQ3NzUyQzExMS42MTYgMy40Nzc1MiAxMTIuNDE0IDMuNjk4ODcgMTEzLjA5IDQuMTQxNTdDMTEzLjc3NyA0LjU3MjYyIDExNC4zMDcgNS4xNDM0NyAxMTQuNjggNS44NTQxMkMxMTUuMDY0IDYuNTUzMTIgMTE1LjI1NyA3LjMxMDM3IDExNS4yNTcgOC4xMjU4NkMxMTUuMjU3IDguMjQyMzYgMTE1LjI1MSA4LjM1ODg2IDExNS4yMzkgOC40NzUzNkMxMTUuMjM5IDguNTgwMjEgMTE1LjIzMyA4LjY2MTc2IDExNS4yMjIgOC43MjAwMUgxMDcuNjU1QzEwNy43MDIgOS4zMTQxNiAxMDcuODY1IDkuODQ0MjQgMTA4LjE0NCAxMC4zMTAyQzEwOC40MzYgMTAuNzY0NiAxMDguODA4IDExLjEyNTcgMTA5LjI2MyAxMS4zOTM3QzEwOS43MTcgMTEuNjUgMTEwLjIwNiAxMS43NzgxIDExMC43MzEgMTEuNzc4MUMxMTEuMjkgMTEuNzc4MSAxMTEuODE0IDExLjYzODMgMTEyLjMwMyAxMS4zNTg3QzExMi44MDQgMTEuMDc5MSAxMTMuMTQ4IDEwLjcxMjIgMTEzLjMzNCAxMC4yNTc4TDExNC42NjIgMTAuNjI0OEMxMTQuNDY0IDExLjA2NzUgMTE0LjE2NyAxMS40NjM2IDExMy43NzEgMTEuODEzMUMxMTMuMzg3IDEyLjE2MjYgMTEyLjkyNyAxMi40MzY0IDExMi4zOTEgMTIuNjM0NEMxMTEuODY2IDEyLjgzMjUgMTExLjI5NiAxMi45MzE1IDExMC42NzggMTIuOTMxNVpNMTA3LjYwMyA3LjY1NDA0SDExMy44MjRDMTEzLjc3NyA3LjA1OTg5IDExMy42MDggNi41MzU2NCAxMTMuMzE3IDYuMDgxMjlDMTEzLjAyNiA1LjYyNjk0IDExMi42NTMgNS4yNzE2MiAxMTIuMTk5IDUuMDE1MzJDMTExLjc0NCA0Ljc1OTAyIDExMS4yNDMgNC42MzA4NyAxMTAuNjk2IDQuNjMwODdDMTEwLjE2IDQuNjMwODcgMTA5LjY2NSA0Ljc1OTAyIDEwOS4yMSA1LjAxNTMyQzEwOC43NTYgNS4yNzE2MiAxMDguMzgzIDUuNjI2OTQgMTA4LjA5MiA2LjA4MTI5QzEwNy44MTIgNi41MzU2NCAxMDcuNjQ5IDcuMDU5ODkgMTA3LjYwMyA3LjY1NDA0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTEzMC45ODEgMTIuNzU2N0gxMjkuNDQzVjcuNjU0MDRDMTI5LjQ0MyA2LjY5ODc0IDEyOS4yODYgNS45OTM5MiAxMjguOTcxIDUuNTM5NTdDMTI4LjY2OCA1LjA4NTIyIDEyOC4yMTQgNC44NTgwNCAxMjcuNjA4IDQuODU4MDRDMTI2Ljk5MSA0Ljg1ODA0IDEyNi40MzIgNS4wODUyMiAxMjUuOTMxIDUuNTM5NTdDMTI1LjQzIDUuOTgyMjcgMTI1LjA3NCA2LjU1ODk0IDEyNC44NjUgNy4yNjk1OVYxMi43NTY3SDEyMy4zMjdWNy42NTQwNEMxMjMuMzI3IDYuNjg3MDkgMTIzLjE3NSA1Ljk4MjI3IDEyMi44NzMgNS41Mzk1N0MxMjIuNTcgNS4wODUyMiAxMjIuMTE1IDQuODU4MDQgMTIxLjUxIDQuODU4MDRDMTIwLjkwNCA0Ljg1ODA0IDEyMC4zNDUgNS4wNzkzOSAxMTkuODMyIDUuNTIyMDlDMTE5LjMzMSA1Ljk1MzE0IDExOC45NzYgNi41Mjk4MiAxMTguNzY2IDcuMjUyMTJWMTIuNzU2N0gxMTcuMjI4VjMuNjM0OEgxMTguNjI2VjUuNTkxOTlDMTE4Ljk5OSA0LjkxNjI5IDExOS40ODIgNC4zOTc4NyAxMjAuMDc3IDQuMDM2NzJDMTIwLjY3MSAzLjY2MzkyIDEyMS4zNDEgMy40Nzc1MiAxMjIuMDg2IDMuNDc3NTJDMTIyLjg0MyAzLjQ3NzUyIDEyMy40NDkgMy42ODcyMiAxMjMuOTA0IDQuMTA2NjJDMTI0LjM1OCA0LjUxNDM3IDEyNC42MzggNS4wNDQ0NCAxMjQuNzQyIDUuNjk2ODRDMTI1LjE1IDQuOTc0NTQgMTI1LjY0NSA0LjQyNjk5IDEyNi4yMjggNC4wNTQxOUMxMjYuODEgMy42Njk3NSAxMjcuNDc0IDMuNDc3NTIgMTI4LjIyIDMuNDc3NTJDMTI4Ljc0NCAzLjQ3NzUyIDEyOS4xODEgMy41NzY1NSAxMjkuNTMxIDMuNzc0NkMxMjkuODkyIDMuOTYwOTkgMTMwLjE3NyA0LjIyODk0IDEzMC4zODcgNC41Nzg0NEMxMzAuNTk3IDQuOTE2MjkgMTMwLjc0OCA1LjMxODIyIDEzMC44NDEgNS43ODQyMkMxMzAuOTM0IDYuMjUwMjIgMTMwLjk4MSA2Ljc1Njk5IDEzMC45ODEgNy4zMDQ1NFYxMi43NTY3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE0OC44MjggOS4yMDkzMVY2LjY5MjkySDE1NC4yMVY5LjIwOTMxSDE0OC44MjhaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTU2LjYwNCAxMi43NTY3VjAuMzQ5NDk5SDE2NS4wMjdWMi44NjU5SDE1OS40N1Y1LjUzOTU3SDE2NC4wNDlWNy44NjM3NEgxNTkuNDdWMTIuNzU2N0gxNTYuNjA0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE2NS4zOCAxMC4wMTMyQzE2NS4zOCA5LjQwNzM2IDE2NS41NDkgOC44NzcyOSAxNjUuODg3IDguNDIyOTRDMTY2LjIyNSA3Ljk2ODU5IDE2Ni42OTEgNy42MTMyNyAxNjcuMjg1IDcuMzU2OTdDMTY3Ljg3OSA3LjA4OTAyIDE2OC41NjEgNi45NTUwNCAxNjkuMzMgNi45NTUwNEMxNjkuNzAyIDYuOTU1MDQgMTcwLjA2OSA2Ljk4OTk5IDE3MC40MzEgNy4wNTk4OUMxNzAuNzkyIDcuMTE4MTQgMTcxLjEwNiA3LjIwNTUyIDE3MS4zNzQgNy4zMjIwMlY2LjkyMDA5QzE3MS4zNzQgNi40MTkxNCAxNzEuMjIzIDYuMDM0NjkgMTcwLjkyIDUuNzY2NzRDMTcwLjYxNyA1LjQ5ODc5IDE3MC4xNTcgNS4zNjQ4MiAxNjkuNTM5IDUuMzY0ODJDMTY5LjAyNyA1LjM2NDgyIDE2OC41NDMgNS40NTIxOSAxNjguMDg5IDUuNjI2OTRDMTY3LjY0NiA1LjgwMTY5IDE2Ny4xNzQgNi4wNTIxNyAxNjYuNjczIDYuMzc4MzdMMTY1LjgzNSA0LjU5NTkyQzE2Ni40NCA0LjE5OTgyIDE2Ny4wNyAzLjkwMjc0IDE2Ny43MjIgMy43MDQ3QzE2OC4zODYgMy41MDY2NSAxNjkuMDg1IDMuNDA3NjIgMTY5LjgxOSAzLjQwNzYyQzE3MS4xOTQgMy40MDc2MiAxNzIuMjYgMy43Mzk2NSAxNzMuMDE3IDQuNDAzNjlDMTczLjc4NiA1LjA1NjA5IDE3NC4xNyA2LjAwNTU3IDE3NC4xNyA3LjI1MjEyVjkuNjQ2MTlDMTc0LjE3IDkuOTI1NzkgMTc0LjIxMSAxMC4xMjM4IDE3NC4yOTMgMTAuMjQwM0MxNzQuMzg2IDEwLjM0NTIgMTc0LjU0MyAxMC40MDkzIDE3NC43NjQgMTAuNDMyNlYxMi43NTY3QzE3NC41MzEgMTIuODAzMyAxNzQuMzEgMTIuODM4MyAxNzQuMSAxMi44NjE2QzE3My45MDIgMTIuODg0OSAxNzMuNzI4IDEyLjg5NjUgMTczLjU3NiAxMi44OTY1QzE3My4wNTIgMTIuODk2NSAxNzIuNjUgMTIuNzkxNyAxNzIuMzcgMTIuNTgyQzE3Mi4xMDIgMTIuMzcyMyAxNzEuOTMzIDEyLjA4NjkgMTcxLjg2NCAxMS43MjU3TDE3MS44MTEgMTEuMzIzOEMxNzEuNDAzIDExLjg0OCAxNzAuOTE0IDEyLjI1IDE3MC4zNDMgMTIuNTI5NkMxNjkuNzg0IDEyLjc5NzUgMTY5LjE5NiAxMi45MzE1IDE2OC41NzggMTIuOTMxNUMxNjcuOTcyIDEyLjkzMTUgMTY3LjQyNSAxMi44MDMzIDE2Ni45MzYgMTIuNTQ3QzE2Ni40NTggMTIuMjkwNyAxNjYuMDc5IDExLjk0MTIgMTY1LjggMTEuNDk4NUMxNjUuNTIgMTEuMDU1OCAxNjUuMzggMTAuNTYwNyAxNjUuMzggMTAuMDEzMlpNMTcwLjkzNyAxMC4zNjI3QzE3MS4wNjYgMTAuMjU3OCAxNzEuMTcgMTAuMTQxMyAxNzEuMjUyIDEwLjAxMzJDMTcxLjMzMyA5Ljg4NTAxIDE3MS4zNzQgOS43NjI2OSAxNzEuMzc0IDkuNjQ2MTlWOC44MjQ4NkMxNzEuMTQxIDguNzMxNjYgMTcwLjg3OSA4LjY2MTc2IDE3MC41ODggOC42MTUxNkMxNzAuMzA4IDguNTU2OTEgMTcwLjA0NiA4LjUyNzc5IDE2OS44MDEgOC41Mjc3OUMxNjkuMjg5IDguNTI3NzkgMTY4Ljg2NCA4LjY0NDI5IDE2OC41MjYgOC44NzcyOUMxNjguMTg4IDkuMDk4NjQgMTY4LjAxOSA5LjM5NTcxIDE2OC4wMTkgOS43Njg1MUMxNjguMDE5IDkuOTc4MjEgMTY4LjA3NyAxMC4xNzA0IDE2OC4xOTQgMTAuMzQ1MkMxNjguMzEgMTAuNTE5OSAxNjguNDY4IDEwLjY1OTcgMTY4LjY2NiAxMC43NjQ2QzE2OC44NzUgMTAuODY5NCAxNjkuMTIgMTAuOTIxOSAxNjkuNCAxMC45MjE5QzE2OS42NzkgMTAuOTIxOSAxNjkuOTU5IDEwLjg2OTQgMTcwLjIzOCAxMC43NjQ2QzE3MC41MTggMTAuNjU5NyAxNzAuNzUxIDEwLjUyNTggMTcwLjkzNyAxMC4zNjI3WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE4Mi42MjcgMTIuNzU2N0wxODAuMjMzIDkuMDg2OTlMMTc5LjI1NCAxMC4wODMxVjEyLjc1NjdIMTc2LjQ1OFYwSDE3OS4yNTRWNy4zNzQ0NEwxODIuMzY1IDMuNTgyMzdIMTg1LjMxOEwxODIuMDE1IDcuNTMxNzFMMTg1LjU5OCAxMi43NTY3SDE4Mi42MjdaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTkyLjYxMSAxMi4yNjc0QzE5Mi4zNTUgMTIuMzcyMyAxOTIuMDY5IDEyLjQ3NzEgMTkxLjc1NSAxMi41ODJDMTkxLjQ1MiAxMi42ODY4IDE5MS4xMzIgMTIuNzY4NCAxOTAuNzk0IDEyLjgyNjZDMTkwLjQ1NiAxMi44OTY1IDE5MC4xMjQgMTIuOTMxNSAxODkuNzk4IDEyLjkzMTVDMTg5LjMzMiAxMi45MzE1IDE4OC45MDEgMTIuODU1OCAxODguNTA1IDEyLjcwNDNDMTg4LjEyIDEyLjU0MTIgMTg3LjgxMSAxMi4yNzkxIDE4Ny41NzggMTEuOTE3OUMxODcuMzU3IDExLjU1NjggMTg3LjI0NiAxMS4wNzkxIDE4Ny4yNDYgMTAuNDg1VjUuNjk2ODRIMTg2LjA3NVYzLjU4MjM3SDE4Ny4yNDZWMC42NjQwNDlIMTkwLjA0MlYzLjU4MjM3SDE5MS45MTJWNS42OTY4NEgxOTAuMDQyVjkuNTIzODZDMTkwLjA0MiA5LjgyNjc2IDE5MC4xMTggMTAuMDQ4MSAxOTAuMjY5IDEwLjE4NzlDMTkwLjQyMSAxMC4zMTYxIDE5MC42MTMgMTAuMzgwMSAxOTAuODQ2IDEwLjM4MDFDMTkxLjA0NCAxMC4zODAxIDE5MS4yNTQgMTAuMzQ1MiAxOTEuNDc1IDEwLjI3NTNDMTkxLjcwOCAxMC4yMDU0IDE5MS45MDYgMTAuMTI5NyAxOTIuMDY5IDEwLjA0ODFMMTkyLjYxMSAxMi4yNjc0WiIgZmlsbD0iYmxhY2siLz4KPHBhdGggZD0iTTE5My44NzUgOS40NTM5NlYzLjU4MjM3SDE5Ni42NzFWOC44NDIzNEMxOTYuNjcxIDkuNDAxNTQgMTk2Ljc4MiA5LjgzMjU5IDE5Ny4wMDMgMTAuMTM1NUMxOTcuMjI1IDEwLjQyNjcgMTk3LjUzOSAxMC41NzI0IDE5Ny45NDcgMTAuNTcyNEMxOTguMjAzIDEwLjU3MjQgMTk4LjQ0OCAxMC41MzE2IDE5OC42ODEgMTAuNDVDMTk4LjkxNCAxMC4zNTY4IDE5OS4xNDEgMTAuMjExMiAxOTkuMzYyIDEwLjAxMzJDMTk5LjU4NCA5LjgxNTExIDE5OS43ODIgOS41NTg4MSAxOTkuOTU3IDkuMjQ0MjZWMy41ODIzN0gyMDIuNzUzVjkuNjQ2MTlDMjAyLjc1MyA5LjkyNTc5IDIwMi43OTMgMTAuMTIzOCAyMDIuODc1IDEwLjI0MDNDMjAyLjk2OCAxMC4zNDUyIDIwMy4xMjUgMTAuNDA5MyAyMDMuMzQ3IDEwLjQzMjZWMTIuNzU2N0MyMDMuMDkgMTIuODAzMyAyMDIuODYzIDEyLjgzODMgMjAyLjY2NSAxMi44NjE2QzIwMi40NzkgMTIuODg0OSAyMDIuMzEgMTIuODk2NSAyMDIuMTU4IDEyLjg5NjVDMjAxLjY2OSAxMi44OTY1IDIwMS4yNzkgMTIuNzk3NSAyMDAuOTg4IDEyLjU5OTVDMjAwLjY5NiAxMi4zODk4IDIwMC41MTYgMTIuMDk4NSAyMDAuNDQ2IDExLjcyNTdMMjAwLjM5NCAxMS4xNjY1QzE5OS45NzQgMTEuNzcyMyAxOTkuNDUgMTIuMjIwOCAxOTguODIxIDEyLjUxMjFDMTk4LjIwMyAxMi43OTE3IDE5Ny41MSAxMi45MzE1IDE5Ni43NDEgMTIuOTMxNUMxOTUuODA5IDEyLjkzMTUgMTk1LjA5OSAxMi42MzQ0IDE5NC42MDkgMTIuMDQwM0MxOTQuMTIgMTEuNDQ2MSAxOTMuODc1IDEwLjU4NCAxOTMuODc1IDkuNDUzOTZaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMjExIDUuOTc2NDRDMjEwLjMyNCA1Ljk3NjQ0IDIwOS43MTMgNi4wODcxMiAyMDkuMTY1IDYuMzA4NDdDMjA4LjYxOCA2LjUxODE3IDIwOC4yMjEgNi44MzI3MiAyMDcuOTc3IDcuMjUyMTJWMTIuNzU2N0gyMDUuMTgxVjMuNTgyMzdIMjA3Ljc1VjUuNDM0NzJDMjA4LjA2NCA0LjgxNzI3IDIwOC40NzIgNC4zMzM3OSAyMDguOTczIDMuOTg0MjlDMjA5LjQ3NCAzLjYzNDggMjA5Ljk5OCAzLjQ1NDIyIDIxMC41NDYgMy40NDI1N0MyMTAuNjc0IDMuNDQyNTcgMjEwLjc2NyAzLjQ0MjU3IDIxMC44MjUgMy40NDI1N0MyMTAuODk1IDMuNDQyNTcgMjEwLjk1MyAzLjQ0ODM5IDIxMSAzLjQ2MDA1VjUuOTc2NDRaIiBmaWxsPSJibGFjayIvPgo8cGF0aCBkPSJNMTQyLjQyMyAxMi40MzZDMTQxLjY0MiAxMi40MzYgMTQwLjk0OSAxMi4zMTM2IDE0MC4zNDMgMTIuMDY5QzEzOS43MzcgMTEuODEyNyAxMzkuMjE5IDExLjQ2OSAxMzguNzg4IDExLjAzOEMxMzguMzY5IDEwLjYwNjkgMTM4LjA0OCAxMC4xMTE4IDEzNy44MjcgOS41NTI2QzEzNy42MDYgOC45ODE3NSAxMzcuNDk1IDguMzg3NiAxMzcuNDk1IDcuNzcwMTVDMTM3LjQ5NSA2Ljg4NDc2IDEzNy42ODcgNi4wODA5MSAxMzguMDcyIDUuMzU4NjFDMTM4LjQ2OCA0LjYyNDY2IDEzOS4wMzMgNC4wMzYzMyAxMzkuNzY3IDMuNTkzNjNDMTQwLjUwMSAzLjEzOTI4IDE0MS4zODYgMi45MTIxMSAxNDIuNDIzIDIuOTEyMTFDMTQzLjQ2IDIuOTEyMTEgMTQ0LjMzOSAzLjEzMzQ2IDE0NS4wNjIgMy41NzYxNkMxNDUuNzk1IDQuMDE4ODYgMTQ2LjM1NSA0LjYwMTM2IDE0Ni43MzkgNS4zMjM2NkMxNDcuMTI0IDYuMDM0MzEgMTQ3LjMxNiA2LjgwOTAzIDE0Ny4zMTYgNy42NDc4M0MxNDcuMzE2IDcuODEwOTMgMTQ3LjMwNCA3Ljk3NDAzIDE0Ny4yODEgOC4xMzcxM0MxNDcuMjY5IDguMjg4NTggMTQ3LjI1OCA4LjQyMjU1IDE0Ny4yNDYgOC41MzkwNUgxNDAuNDY2QzE0MC41MDEgOC45NDY4IDE0MC42MTEgOS4yOTA0OCAxNDAuNzk4IDkuNTcwMDhDMTQwLjk5NiA5Ljg0OTY4IDE0MS4yNDYgMTAuMDY1MiAxNDEuNTQ5IDEwLjIxNjdDMTQxLjg1MiAxMC4zNTY0IDE0Mi4xNzIgMTAuNDI2NCAxNDIuNTEgMTAuNDI2NEMxNDIuOTMgMTAuNDI2NCAxNDMuMzIgMTAuMzI3MyAxNDMuNjgxIDEwLjEyOTNDMTQ0LjA1NCA5LjkzMTIzIDE0NC4zMSA5LjY2MzI4IDE0NC40NSA5LjMyNTQzTDE0Ni44MjcgOS45ODk0OEMxNDYuNTk0IDEwLjQ2NzEgMTQ2LjI2MSAxMC44OTI0IDE0NS44MyAxMS4yNjUyQzE0NS40MTEgMTEuNjI2MyAxNDQuOTEgMTEuOTExNyAxNDQuMzI4IDEyLjEyMTRDMTQzLjc1NyAxMi4zMzExIDE0My4xMjIgMTIuNDM2IDE0Mi40MjMgMTIuNDM2Wk0xNDAuMzk2IDYuODI2NTFIMTQ0LjM4QzE0NC4zMzMgNi40NDIwNiAxNDQuMjIzIDYuMTEwMDMgMTQ0LjA0OCA1LjgzMDQzQzE0My44NzMgNS41MzkxOCAxNDMuNjQgNS4zMTc4MyAxNDMuMzQ5IDUuMTY2MzhDMTQzLjA1OCA1LjAwMzI4IDE0Mi43MzcgNC45MjE3MyAxNDIuMzg4IDQuOTIxNzNDMTQyLjAyNyA0LjkyMTczIDE0MS43MDEgNS4wMDMyOCAxNDEuNDA5IDUuMTY2MzhDMTQxLjEzIDUuMzE3ODMgMTQwLjkwMiA1LjUzOTE4IDE0MC43MjggNS44MzA0M0MxNDAuNTUzIDYuMTEwMDMgMTQwLjQ0MiA2LjQ0MjA2IDE0MC4zOTYgNi44MjY1MVoiIGZpbGw9IiNFMzE3MzgiLz4KPC9zdmc+Cg==">
                    </div>
                    <div class="header-info-wrapper">
                        <div class="header-info">
                        <span class="label-data-info">
                            <span class="label-data-info--value">Numer faktury</span>
                        </span>
                            <span class="label-data-info">
                            <span class="label-data-info--value2">WPI/00005/2023</span>
                        </span>
                            <span class="label-data-info">
                                <span class="label-data-info--value">Faktura podstawowa</span>
                        </span>

                            <span class="label-data-info">
                            <span class="label-data-info--name">Numer KSeF: </span>
                            <span class="label-data-info--value">9999999999-20230413-AA394A-648DD5-9B</span>
                        </span>

                        </div>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">



                        <span class="section-data__header section-data__header--h1">Sprzedawca</span>





                        <span class="label-data-info">
        <span class="label-data-info--name">NIP:</span><span class="label-data-info--value">9999999999</span>
    </span>
                        <span class="label-data-info">
        <span class="label-data-info--name">Pełna nazwa:</span><span class="label-data-info--value">CN_9999999999</span>
    </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">Nowa</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">99</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer lokalu:</span><span class="label-data-info--value">100</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">00-950</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">Warszawa</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Poczta:</span><span class="label-data-info--value">Warszawa</span>
        </span>


                    </div>
                    <div class="section-data__wrapper-right">



                        <span class="section-data__header section-data__header--h1">Nabywca</span>





                        <span class="label-data-info">
        <span class="label-data-info--name">NIP:</span><span class="label-data-info--value">3567424510</span>
    </span>
                        <span class="label-data-info">
        <span class="label-data-info--name">Pełna nazwa:</span><span class="label-data-info--value">CN_3567424510</span>
    </span>



                        <span class="label-data-info label-data-info--vertical-space">
            <span class="label-data-info--header">Adres</span>
        </span>


                        <span class="label-data-info">
            <span class="label-data-info--name">Ulica:</span><span class="label-data-info--value">Aleje Jerozolimskie</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer domu:</span><span class="label-data-info--value">130</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Numer lokalu:</span><span class="label-data-info--value">5</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Kod pocztowy:</span><span class="label-data-info--value">00-468</span>
        </span>
                        <span class="label-data-info">
            <span class="label-data-info--name">Miejscowość:</span><span class="label-data-info--value">Warszawa</span>
        </span>


                    </div>

                </div>
                <div class="section-data">


                </div>
                <div class="section-data">

                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Szczegóły</span>


                    <span class="label-data-info label-data-info--half">
                <span class="label-data-info--name">Data wystawienia, z zastrzeżeniem art. 106na ust. 1 ustawy:</span><span class="label-data-info--value">2023-04-13</span>
            </span>



                    <span class="label-data-info label-data-info--half">
                    <span class="label-data-info--name">Data dokonania lub zakończenia dostawy towarów lub wykonania usługi:</span><span class="label-data-info--value">2023-04-12</span>
                </span>






                </div>
                <div class="section-data">
                </div>
                <div class="section-data">
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Pozycje</span>

                    <span class="label-data-info">
        <span class="label-data-info--name">Faktura wystawiona w cenach netto w walucie PLN</span>
    </span>

                    <table class="table-basic table-basic--wide">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>
                            <th class="table-basic__header">Nazwa towaru lub usługi</th>
                            <th class="table-basic__header">Cena jedn. netto</th>
                            <th class="table-basic__header">ilość</th>

                            <th class="table-basic__header">Jedn.</th>
                            <th class="table-basic__header">Stawka podatku</th>
                            <th class="table-basic__header">Wartość sprzedaży netto</th>








                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">test 5%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">500,00</td>
                            <td class="table-basic__cell table-basic__cell--to-right">10</td>

                            <td class="table-basic__cell">godz</td>

                            <td class="table-basic__cell">5%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">5&nbsp;000,00</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">2</td>
                            <td class="table-basic__cell">test 23%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">100,00</td>
                            <td class="table-basic__cell table-basic__cell--to-right">20</td>

                            <td class="table-basic__cell">godz</td>

                            <td class="table-basic__cell">23%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">2&nbsp;000,00</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">3</td>
                            <td class="table-basic__cell">test ZW</td>
                            <td class="table-basic__cell table-basic__cell--to-right">200,00</td>
                            <td class="table-basic__cell table-basic__cell--to-right">30</td>

                            <td class="table-basic__cell">szt</td>

                            <td class="table-basic__cell">zwolnione z opodatkowania</td>
                            <td class="table-basic__cell table-basic__cell--to-right">6&nbsp;000,00</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">4</td>
                            <td class="table-basic__cell">test 0%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">300,00</td>
                            <td class="table-basic__cell table-basic__cell--to-right">40</td>

                            <td class="table-basic__cell">szt</td>

                            <td class="table-basic__cell">0%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">12&nbsp;000,00</td>
                        </tr>
                        <tr>
                            <td class="table-basic__cell">5</td>
                            <td class="table-basic__cell">test 8%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">40,00</td>
                            <td class="table-basic__cell table-basic__cell--to-right">50</td>

                            <td class="table-basic__cell">kg</td>

                            <td class="table-basic__cell">8%</td>
                            <td class="table-basic__cell table-basic__cell--to-right">2&nbsp;000,00</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="label-data-info label-data-info--right">
                        <span class="label-data-info--name2">Kwota należności ogółem:</span>
                        <span class="label-data-info--value2">27&nbsp;870,00&nbsp;PLN</span>
                    </div>

                </div>
                <div class="section-data">
                    <div class="line-basic"></div>

                    <span class="section-data__header section-data__header--h1">Podsumowanie stawek podatku</span>

                    <table class="table-basic">
                        <thead>
                        <tr>
                            <th class="table-basic__header table-basic__header--lp">L.p</th>
                            <th class="table-basic__header">Stawka podatku</th>
                            <th class="table-basic__header">Kwota netto</th>
                            <th class="table-basic__header">Kwota podatku</th>
                            <th class="table-basic__header">Kwota brutto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-basic__cell">1</td>
                            <td class="table-basic__cell">23% lub 22%</td>

                            <td class="table-basic__cell table-basic__cell--to-right">2&nbsp;000,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">460,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">2&nbsp;460,00</td>

                        </tr>
                        <tr>
                            <td class="table-basic__cell">2</td>
                            <td class="table-basic__cell">8% lub 7%</td>

                            <td class="table-basic__cell table-basic__cell--to-right">2&nbsp;000,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">160,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">2&nbsp;160,00</td>

                        </tr>
                        <tr>
                            <td class="table-basic__cell">3</td>
                            <td class="table-basic__cell">5%</td>

                            <td class="table-basic__cell table-basic__cell--to-right">5&nbsp;000,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">250,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">5&nbsp;250,00</td>

                        </tr>
                        <tr>
                            <td class="table-basic__cell">4</td>
                            <td class="table-basic__cell">0%</td>

                            <td class="table-basic__cell table-basic__cell--to-right">12&nbsp;000,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">0,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right">12&nbsp;000,00</td>

                        </tr>
                        <tr>
                            <td class="table-basic__cell">5</td>
                            <td class="table-basic__cell">zwolnione z opodatkowania</td>

                            <td class="table-basic__cell table-basic__cell--to-right">6&nbsp;000,00</td>

                            <td class="table-basic__cell table-basic__cell--to-right"></td>

                            <td class="table-basic__cell table-basic__cell--to-right">6&nbsp;000,00</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Adnotacje</span>
                    <div class="section-data__divide-lr">


            <span class="label-data-info label-data-info--half">
                <span class="label-data-info--name">Mechanizm podzielonej płatności</span>
            </span>

                        <span class="label-data-info label-data-info--half">
                <span class="label-data-info--name">Metoda kasowa</span>
            </span>



                        <span class="label-data-info label-data-info--half">
                <span class="label-data-info--name">Procedura marży:</span>

                    <span class="label-data-info--value">towary używane</span>
            </span>


                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <span class="section-data__header section-data__header--h1">Płatność</span>


                    <span class="label-data-info">
            <span class="label-data-info--name">Forma płatności:</span><span class="label-data-info--value">Przelew</span>
        </span>
                </div>
                <div class="section-data">
                    <div class="section-data__wrapper-left">
                        <div class="keep-together to-left to-left--with-margin">
                            <table class="table-basic table-basic--wide">
                                <thead>
                                <tr>
                                    <th class="table-basic__header">Termin płatności</th>
                                    <th class="table-basic__header">Opis płatności</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="table-basic__cell">2023-04-24</td>
                                    <td class="table-basic__cell">przelew</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="section-data">
                    <div class="line-basic"></div>
                    <div class="section-data__wrapper-left">
                        <span class="section-data__header section-data__header--h1">Numer rachunku bankowego </span>


                        <table class="table-basic">
                            <tbody>
                            <tr>
                                <th class="table-basic__header">Format rachunku</th>
                                <td class="table-basic__cell">Polski</td>
                            </tr>

                            <tr>
                                <th class="table-basic__header">Pełny numer rachunku w standardzie NRB</th>
                                <td class="table-basic__cell">41124030155049171909858866</td>
                            </tr>




                            </tbody>
                        </table>
                    </div>
                    <div class="section-data__wrapper-right">

                    </div>
                </div>
                <div class="line-basic"></div>
                <div class="section-data">
            <span class="label-data-info">
                <span class="label-data-info--name">Wytworzona w:</span><span class="label-data-info--value">Aplikacja Podatnika KSeF</span>
            </span>
                </div>
            </div>
        </div>
    </div>


</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"
        integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw=="
        crossorigin="anonymous"></script>
<script>
    // document.addEventListener("DOMContentLoaded", (e) => {
    // if (document.getElementById('sendSmsNumber')) {
    //     Inputmask({
    //         mask: "99999999999",
    //         placeholder: "",
    //         showMaskOnHover: true,
    //         showMaskOnFocus: false
    //     }).mask(document.getElementById('sendSmsNumber'));
    // }
    // if (document.getElementById('callPhoneNumber')) {
    //     Inputmask({
    //         mask: "99999999999",
    //         placeholder: "",
    //         showMaskOnHover: true,
    //         showMaskOnFocus: false
    //     }).mask(document.getElementById('callPhoneNumber'));
    // }
    // if (document.getElementById('transferCallNumber')) {
    //     Inputmask({
    //         mask: "99999999999",
    //         placeholder: "",
    //         showMaskOnHover: true,
    //         showMaskOnFocus: false
    //     }).mask(document.getElementById('transferCallNumber'));
    // }

    // });
    // document.addEventListener('click', (e) => {
    //     console.log(e.target)
    //     if (e.target.id === 'goModalCall') {
    //         document.getElementById('modalGoCallPhone').classList.remove('none');
    //     }
    //     if (e.target.id === 'closeModalCallPhone') {
    //         document.getElementById('modalGoCallPhone').classList.add('none');
    //     }
    //     if (e.target.id === 'modalGoCallPhone') {
    //         document.getElementById('modalGoCallPhone').classList.add('none');
    //     }
    //     if (e.target.id === 'goCallPhoneBtn') {
    //        goCallPhone()
    //     }
    //     //
    //     if (e.target.id === 'goSmsSend') {
    //         document.getElementById('modalSms').classList.remove('none');
    //     }
    //     if (e.target.id === 'closeModalSms') {
    //         document.getElementById('modalSms').classList.add('none');
    //     }
    //     if (e.target.id === 'modalSms') {
    //         document.getElementById('modalSms').classList.add('none');
    //     }
    //     if (e.target.id === 'sendSmsBtn') {
    //         sendSms()
    //     }
    // //     transfer
    //     if(e.target.classList.contains('transfer-call')){
    //         document.getElementById('transferCallNumber').value = e.target.dataset.transfer;
    //         document.getElementById('modalGoTransferCall').classList.remove('none');
    //     }
    //     if(e.target.id === 'closeModalTransferCall'){
    //         document.getElementById('modalGoTransferCall').classList.add('none');
    //     }
    //     if (e.target.id === 'modalGoTransferCall') {
    //         document.getElementById('modalGoTransferCall').classList.add('none');
    //     }
    // })

    function sendSms() {
        {{--const number = document.getElementById('sendSmsNumber');--}}
        {{--const message = document.getElementById('sendSmsMessage');--}}
        {{--const blockMessageForm = document.getElementById('blockMessageForm');--}}
        {{--const insertAnswerSms = document.getElementById('insertAnswerSms');--}}
        {{--console.log(number.value.length);--}}
        {{--console.log(message.value);--}}
        {{--if (number.value.length === 11 && message.value !== '') {--}}

        {{--    blockMessageForm.innerHTML = '';--}}
        {{--    $.ajax({--}}
        {{--        url: "{{URL::to('/')}}/send-sms",--}}
        {{--        type: "POST",--}}
        {{--        data: {--}}
        {{--            number: number.value,--}}
        {{--            message: message.value,--}}
        {{--            _token: '{{csrf_token()}}',--}}
        {{--        },--}}
        {{--        success: function (res) {--}}
        {{--            if (res.status === true) {--}}
        {{--                insertAnswerSms.innerHTML = '<p class="success-send">Сообщение успешно отправлено</p>';--}}
        {{--                setTimeout(() => location.reload(), 1500);--}}
        {{--            } else {--}}
        {{--                blockMessageForm.innerHTML = '<p class="error-block">Ошибка, попробуйте позже..</p>';--}}
        {{--            }--}}
        {{--        }--}}
        {{--    });--}}
        {{--} else {--}}
        {{--    blockMessageForm.innerHTML = '<p class="error-block">Не все поля заполнены</p>';--}}
        {{--}--}}
    }

    function goCallPhone() {

    }

    function goTransferCall() {

    }
</script>