@extends('layouts.webSite')
@section('title', 'Services')
@section('content')
<div class="information-page-slider">
    <div class="information-content">
        <h1><a href="{{ url('/') }}">Home</a><span>Services</span></h1>
    </div>
</div>
<div id="about">
    <div class="default-content products-page pt-5 pb-3">
        <div class="custom-container">
            <div class=" pb-3">
                <h1 class="text-center" style="color: #ff6b35;font-family:'Playfair Display', serif;font-weight:500">Our <span style="color:green">Services</span></h1>
                {{-- <p class="text-center pb-3">From basic treks to high-altitude mountaineering expeditions, we cater to adventurers of all levels.</p> --}}
            </div>
    <div class="container">
        <div class="main-content">
            <div class="content-left">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExIVFRUVFxcYFhcYFxUYFxYXFRUWFxcVFxUYHSggGBolHRUVIjEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgMEAAIHAQj/xAA8EAABAwIEBAQEBQMDAwUAAAABAAIRAwQFEiExBkFRYRMicZEHgaHBFDKx0fAjQuEVUmIzkqIk
                Y3KC8f/EABkBAAMBAQEAAAAAAAAAAAAAAAIDBAEABf/EACYRAAICAgICAgMBAAMAAAAAAAABAhEDIRIxBBMiQTJRYYEUI0L/2g
                AMAwEAAhEDEQA/AL2NtoUwA4CdI7gnsgdGnUc4ESGtOn+E3Y5wiHCfE105aEdESsuHGHKHOGUN21Gqn9Um9lHujFV2VcJxYsaGvcS4jn6deSUcXLH3UPcIc4fQdU9/
                6G3MQGggHpuOk80hY9atF3TaTlEwe2v7LM8G4pf07BNcmy7ieFMJb4emgkTIlUX2bWOgnYapivq9GkAGb5dRM+hQWzpeJncRuNFHm4wdMtw3NWjmGP1B4zsqHMCvYzQLKz2nkT7K
                lm6L0IVxVHnTvk7JU78A4pSpghx83IdUhtJTNwNgv4irJMBuq6SVbNg3ejsOG2/j+Zg8vXp1hT4rb+C2Q8yiOAjK3II8vyWYjZtLiXn010lA8S467DWZqfy6FC6xY5dRtGsre1xBtenDuZ1joEw3uB030XCWjM08ufqgeD4ZTo0SS6Xc529Ag4TjHbGc4SlpBjCazWAEDZNdrXFQJWwqm1
                zZjdHLOq1g6JmC0tivI29FuqxwcCDoN+6s0rkQqJvmOMZgp6VvrICp7JeiK6xPK78pIPMdVvb4nJgiPurj7YFUb+iGiYWHEzA0klVbiuxsqHBq8hwjYlZdQ5xGX5952XGoXsbpCo0uHL
                
                bbWPVJ2BVx4uZrfMD01TfxZb1qdJ1WmzQCSP1KF/D+x8aiauXVxMlTTjOUtaKoThGO9hvwnVmjl+qU+Nab6LCDOV0+i6XZ22UajZLPHmV7GsOsnb3P2Rzx/HvYEMny0tHLeFzlJaSQHOG
                vquk22FglpbqN9T05pCuIpPYwbkz9k94BUqU2tzTrpBGsBLgvlTGTdRtBLCcKIq5y4gif4EwnEG0x5j7qrStXnznQ8gh5wvOXGpJ5DX6qsjFf4gUatyPGZszUDqOaQMNmrUawie2ui7Rn
                pst3NdEQZ5yuY8M4U59xULRIEkagfqkzjtDsctMAYrTyXENH7IxhGDuqPioSGRI7rXjewcy4bIgn6xH1VmldHwwJ1A3nop5uMJbKIKU46A93h4a9zQdjCxWi0nWT9FiWxqQZuOM6r2S47
                DrzCbPh/fPrM8WtUmdm7afdcsunNykDrCPYPUfRyDMYDZg669uiPDlkrcti8uJOlHR3RlVmSdIhcU+JFww3oDANQNRse6fcI4kpVqJO0bg8tFx/iG5JuXOnYwB807NJSjSFYIuMrYwPsy
                
                
                1rYOkKWhi7WA9lq28LqQjzeVBcPph7apJIIJ06f4K8SnK3I9jlTSiKmOXXi1nP6qgGLe5ZD3eqxe7BJRSR4k23JtmhKfvh45zGuLdzOnVITzCf/h1TLxv2Q5b46DxVy2PeF4w6kSH89Qt
                r3EvFdvp0Va9wKs7zNGg6qfAsHflNRzdIkdVPxyv4FHLEvmD7/Earj4TXkM2Mb99Vtcva1obOy9Fn/XceSo43RI1SMjndMfjUKtLsPYXiGUAI8y7a5qRcNOkyjFtXhBizuDph5MKmtDlg
                OH0wMxALu6OkAbJOwa9O0rXiTjqhZCKjw5/+xupXq45xlHR5WXHKMtjj4msLeqAQuF4t8aHkkUaAbvDnO1/7R+6oYF8YLiiwsrN8fWQ4uhw7bRCaJ2dwp0wHmPn6q4+mI0XPuCviRQvH+G4eFU5A6h3oeq6C2rouOQIx6+FOi4uHIg/NKvAF62nRLTtmdHpOip/FfFSG+Gw7kTH89EEwPN4Oilz5+HRXg8fn2dNqY7SA1ICSuKcQY57S0/3A9o2QSsXHc6oDiF6fEyk7bJC8ty1Q9+JGG7DeJsH4ijV0OXTbbWQjuIX9TxKPhjmH
                EdRpISbVxPK9pOoBCeK+MU3NY5gzOGWY5Sn4cjnbJ82NQpIebe4zMDjodyF5c3VPwyZGg+qXLi/c6k4tJaY2SvgdKo8Oc55Op5/Uqhzp0TqDabKXF/ErgTRp89PkhXBuIGnWeX
                
                ESRpO3f7LZ+HeJWe4cjoOarWNnNwGEwISJzfIfDGuJa4yunVy2oSAATqJj+aIfRqAN082nSfVNHFmCtFg7QhzdQZ6dQlnge1NUto1Jyk8tzrMBBLE5StsOOVRWkU/9T9V4mTFO
                EmNqvaOR6dQCvVn/ABkavJFSo0fl5zKcOGrDxnFpMNDfmlGzZJcd0x4ZcvpiWGCpeajJKXRTxbi2uxzwDhsU3l86Cd9o9eq5jx9UaL54p7eXToeY+/zXRMLxpxo+GfzQef6LmF
                /Si4fuYdP7qqM8SVRJ5QyN3IdcJrClbAlp1bvCXbRhcarhzXRbdlN1oG7S37c0oWlBrHvbMjeOqnzQrooxSb7ObXgPiOnqvHMV7HA3x35dp26KtmkQr10iB9shNOQux/CDDqX4
                bxCJcSdeYPbouQELrXwSuWHPTJEjX1k7AI4i59HS61bQNDZkgf5Ks3NRtOlJ6KzdBobOmglLGMPfc0zRpHzOHt1Mo2xdApt0CDGpJKDY0w5NdinCz4WNKmAXAkDpv80FxvDXRs
                
                
                
                NF52bHJfJnp4ckZLigPg9IFqLUaQBQuwbGgRKk0kgKDuWi9ajsi4ixQWtu94dDiIb6rh15cPquLnEucSZJ1Tz8Vnua+m3NLYPus4Iwum+lmc0Ek7leniXqx2/s87Ivdk4r6EZm
                F1HahpWlTD6g3aV2qlh1JukBDr6xoGYIRPM0b/xI/sRfh40MxC3NQeXNz2mDC+oKlZpb8l89Xtm0U3Ru3VpG4IT9wrjb6lswuMmIJ6wme5JWxD8Z8qRQ+KTmNDABq77KHAGSwe
                iFcZ0nVqg1O+yJcNEtAYR2UeRrI00V4k8dpm93aEPnkkriCi4VgV1HEaEN0C5vxRUIfBS4RcZ0HkknCyXD8LFWk4kwZgfuUb4DqtYCKm+Yz8tEKwwzSdldGgVzhGgHlzTuCmxy
                
                OK0hTxKT2x4xqux1OGmJ6JWwSo4B9NuvX06I83h1xBOf25IDSrizuHNdqH9eybHnKdyVIVLhGHGG2W+HcGfUqvghsnUnWOgHdVeLMAdavZWz6EgHoJMSEycF3ZLszgQHGRpAMncIvx/SFSzqaAlozt9WeYfUKrgmR+ySEzGG1Klq8OaQAJkiJ580E4IthUpvyOAqUzmafloPTfVH7Ti2hVtXeJpmbGvcagQk/wCGNnVfXe2m7KMpk9p5/RC1tNbDTdNPQSvsZqGo6XAHYjUxAj7LEPxfCHitUBdqHLEp+y+xy9ddAm3LhAjcInZvcoTVENJA00RLD2AkdCvKyS10ejCO+zalcuYSeyENEvJMamU1YzZgUy5vIJCs6rnuOuyLCnKLZ2b4ySHrDrp76eVmoCDvHmdJjf1RPhFkMcDqqVW1Drh4JgarXJVV9HcX3Qj4g0Z3QqgKs4yzJVc0GdUPzlerD8UeVP8AJkpqapl4Lo1fGFSm4tjmEstbKeOAqoaDKDPNwhaGYIKc6Z06lWualOCSdPdXOE6NRtR5cNgBr76K7g9/T8IHslnE+OqdoK1RwkTDGjQvfyA/fkAVsEtSb2ZNvcVGkNeJ4yW1PDIhV8Vph1Mkb8vVcCxX4g3tat4xe1uujA0ZQBsNdT7rpnDHxBZdW+WqwMe3yuy6gHk4A8j+6ZUnaf8AgrlFU1/pLaOAmdwprV
                tSpNSkMzBMukZdBJ1O+nRBeJWP8F4o/wBR7spDQQC5riJ0dHIz7JQuK+JU6P4enbVqVNxBdlFV5eQIHmzOgQNA2AocPi3bnaLs3l0koUwr8RcHrVajHgsyiG6vY0ku5AOIk6HTsjWF4
                fkoNY2o1rgNZzfqAkLCuIKlF5p3dEvpObkcx7Ie1pc0lzQ8eZ2nP3EmS11jjbVjTTqtuKdTMaJDiH08uXMyqCJgFwAO5gyOat9UKSf0R+/Im2u2EcXwC8c6W3NADpne39WxPzQ7Fs
                CqMpN/9VTDh+bO5zW6/wDuZcvuQhFbjW4cdqcdIJ+pKlt+MjGV9BhB0IBIBHoZ+kIvXAH3ZNkVnUrB5pOMnaWuD2kESCHNJBEEbLrvDNmylbtad4lcwr8c13PkZKjDHlqUqWdo0EN
                
                qgSdNiTPqujFrxQDjoIU2eNfRX4877Yu3jHVa7y38rT9eyuYVc5H68j7qPBqD3B9Ru0k+qrWzSXkmdT8plL4xUVrYalJye9Ds65D27rmHFlYOqR0XQH2T2szRpHzXPOJrEyag90Kd
                yXIKSqDoJ4TZE0S4HkqHC989lwWn+4+52CsYFeEUiOUKLEWCmG1mfmDmkrIv5NM6X4qSOoW+IFjIfvv2XP8Ai0Zqwdm5HRFaV0+u0Q3YSUMubQOLpdq3kjeVtpfQPqST/Y9cOYmyr
                RYBoQB8oHLqFQ434kyU3UmAOdHsCNykwY49rmNYCNd42B3HdO/GNvR/BF7WtLiBroCeuquu0edxqWzklGlVNEFjZGw7wpuFL27/ABAp2rmsqu0Mxlga+aRsFrg+MZW5DOhMEch6KH
                hjEMmIMqg/3nfoRzCCKVjZSlxDOKW142q8VS11SfMQdDOunyheqfiK/c+5qOmZI7f2jksWOMLOUsldA+7pEsgf7irOE3ZYCCNlAHCHOnYq3bV2FsRqvKn+NHpx/K0X6uIF9N/QBIV
                K4LC4jumm6fDHAc0nVwRMp/iQVSEeVN2h34Nvz4bp1KH0LxxujrG684NuAGPB3VKk6KxKJY0pzOeRuEQbjA/rO9UPc1Xb4zUce6rQrY9Iil2z1qb+ChMiUpAJy4BpA5ieqV5Fet2O
                
                8dP2I6BZ3AYw68lx3jXEDVuXCfKzQeumY/b5Lqd6wtZK4ndVMz3O/wBznH3JKT4UnK/4N8xJV/SIIvw3emlVkbOBaR9Qff8AVCFLRdBBV5AdAr42XtG2Zg8h9JIB6jUj0KltcfBbo4hrhmaJ2nXKf5uEisvCF7bXRAInmfqf8orB4jVj19SuKIa/MaoMNfuMsaAyZB5D17JHrUy0kHcK8a8jXWFC9oMcuXuDH1/VYEVgVLRplxDRuVG36c/f/Cs2dN052CYO259ufyWHHlS0qMOrXNI7bRzXcGYoX4fTNRuV7qTS4dCWzt1XLv8AXK1RuWnQFXKPOMjnOg7GW6iNRPonG1xjx7cGIMQZ3BA5jqkeTJxjaKPGSlKmScE4gTTqMiYmFdwx4dXDHaDaPRB8AuGsLgFKb0eJI3UnudlawqjqF9Qb4Pl08v2XL8Ya00nSOqL3uN1fCygzIjugLgXsgoMuRTpoPHBwTiyrhhHhEdlSuqwNIgnUH9Ebwi2BOQaDYujQJXxCjFaqwOzBp3GxR41cmwMmood+C7kkBsEyF7jNAtrOB0kTAhUeFcTFKmDzC9xPGfErZttNFsZKmn+zGnaa/QCxnEQMrWjUFdKqcOk4cX1HS7w83ZukyuN4hUL60f8AJPdTi+ubE2pAPlyZ582XpHpzVkZRXZDJTfRzS2fqe6gY4h4I3nRTVfK+FBVPm0RIx/oMVMRM66nmV6hBaTqsS/XEZzkM1OhqfNuiNq1gGhQG+qEPGu4XljVJG6ilico3ZZHIlKqDr2ABxmQle5Ae+ERqXpAIQeqdU3x8bjbYrPNOkHcAoljiBsVBePiqVY4YufzA/JUL+tNUlFBN5HZk2lBUUbn8xUKlq7rRzVUiZnoTHwld5HFLgRjh14DtUrOrgxuF1NDdiWJuc2I0K5dUpwSOi6Ne1G5dEnYxZ5Xno7Uff+d0HhrimgvLdtMEvZ5Qf5/NCvEQpUgaZB0g+06tPvI+aovbGhVbJDVqym7deFegLDjei+JlodppJOhka6fP3WtR22kLxu89FqVxxJVrZg3ytGVuXytjNqTmd/ud5onoB0W1C4c3Y6dDstW1Tly6RM/Pr/Og6LQlacb1amZxc4SSmvgeYriDl8v/AHebT2j6JSaum4Ph4t7QNI85Bc//AOTuXyED5KbyZVCv2U+LG53+
                gfhNEms7WNddOWu30VyplY/Uys4bohz3Onmo8cbDp7qPuVFnUbCbq8tC2uIbT+6HU7gGm0d0durYPpATyU8lTKIu0K+GXJLXtDiAem6ja2kBUbUcfEk
                FrxrI5tI+6kwiyIqPah+LWsOJKqtOdJk+1C2hmwrCaQoFweXOcfIAdhzLlSuLPLUElbcKXoFMt6KTFDmdMpfy5tBfHgmhUrtHj9pR2vTaGygdxQLXyTzRBz5anZU3TTEY3V6AWNUwHAhD
                X7oliIQxxVmP8USZPyLdN+g2XqgbssW0ZYWxagRBC2wemYMrfEK2YEhaYZfjNlPNSvl66KVx9llqpYOc/QaINiDIJHRObbgAaapSxUy4nqu8ecm6Z2eKStGuC3Ba9TXY88qjhx84RS+on
                
                dPepCVuIOrbqIlSXO6q1HI0C2TtKKYHh9Wq4+E2YQakU+8O8VULSkAKcu5nr80OS6pB4km9sEvztfkeCCNwvcTAc0dvp/P26K5iuLfjq4NKkcxEBrRLnH0C2ueFr1oJNtWjs0n6CSlpN
                Uw3TtCt4RkhomRBHKPmvG4LUMbSdhMn2CnquLSQdCND1HYrqHwx4fDmC6qiSf8Apg8h1T05SZO1GK2JGGfDK+rDMG02D/m4g+waUWb8HruNa9AHp/UP1y/Zdhq3hZuwx2XrLtrhIMpvE
                TyOQD4Q1xTeTXpmqB5GAOynrLzt20XP8UwypbvNOqx1N41yuEGOoOzh3BIX054w1123QziLALe+pZKzcw3Y8aPYTza7l6bHmFlJ9BfJK2j5pJWALoeI/CW5a4+DWpVGcs+Zjo7gNcJ+
                aoU/hpez5jRH/wB3H9GrKZ1oAcPYY+vVysE5BnPSARHuT+q6FiBIoOB3A19le4U4a/BtIzZnv/O6IGmzR2GvuVb4pt2soudlABGvqpfJxydNFnjZIK0BuCLP+kXHnKqcS0i0/NG+DDN
                BBeMasGFLBp5GVzVY0A6tR0CDzTPa3JLWgpVtmSRrzTc5rQ1u0wgz0qRuG3bNcDrtFw8HogfFtWahjb/KnFXJcac1Wxthc6YQwVZE/wCBTd42v6VeHqkEhHHgFwHul/CzlrEdQi1494
                LGmAN4HM9zzTsi+f8AgmH4FG8c3xC0ra4a0DQodfRnPWVLVcMoEo3HSAUtsG4hRMTyQkhErysYyodUVWO62S5KvR6HrFrCxMF2XDV0WlAjMCoivIWcTVIYvF8uk+6FXjpUdK7cNF498
                pUIOLGzmpLRDSMGUUr4hmbCoMapqFEEwmtIUr6IKjpUDmq3d0sphV1yOZjArFJgKhClp6Fcag7w3iz7KqalLLLmlpnoSDoeWwTxhnxGJdFZuUHnmMf4XNKgIhWaVDO1A192Nx5ZR1R0
                jiO1tsQp59G1h+R43d/xf1b3O3JOtjTbQosYNA1o0+S4VhLa1OqAxxkatHJM/Gt/cmhTrh2QtinVpguGhnLUj/xMTu1dGbWhmTFCbUul9nUrO/ZWaSxwcAS13UEbghD8Rb4AdWB8rQX
                OHYCSVxnhPimra1C4eZrvztJ0d3nk4cinjFeMKFxbVKYqZTUY5uUxmBLTG084To5Nb7JJYfl8ehFPGF0HPGb87iSDyJXZ+HK0WtBrnS7wmEnqXNBJ9yV8903S7uuwHEKVOlQeKo8NtN
                gzTqQGgRA56bIMdJjc0pTSX9G8XBcdNlmm5IXPK/HwzODfK0flEau7l3/4gzLy/v3ObQnJs958tNvYu69hJWvLeooGPjpK5s6a26tzmiuyRuOQ9SoMdshWoOZ20S9gvDFK0ymrWFV/M
                u/K3s1n3OvomQY1bzldWa0nTXmuU6/No2WHlvFFilwq1zGlh5aIDxsfMjeI3hp1n5YLZ3G3ySzxHeeINlGo1PRVKX/XTKGGXXmaCeYTfeVR5YK5/RY6ZCJnEn6c4XZsHJpoHFm4xphL
                
                GLhrajSN+auVKodTB5lKt9dZjKvULj+jqdkMsD4oKOdcmT0CGXAdyy/dFsYqhzmuSjc3EkHorLsT8oHqulhk3GR0cySaK90/+qe5V6oyIQoPzPlW7kuAkgp8ovSQiMltnl1bg7Ife2+
                WFcrPIAPVTY/SIZTJESFsVJNGS4tNgULFqsThFl/8CV4LQouzZShghDyGqAGbardtoi3gtO69bajksthKKKFC3AVy3tWgypWWp3WppOBS3YyKSKGO0wHCEKV/FnkkSqCZFaE5PyMClojzBRBSMOoRAoZH4fmYD2W1na5N0Uw17XUgtjTBUnN9F/rT2is7KxzahMBvMfRMdpxLTuaT7d7
                ZpZYeZiRyA5zIBQQ0AZ
                aRIIg9Et31u+2cQ2cj9Qf50RQk/o6dKrWihidsKbyGOJbJgmJjvGipMdqrL35vmoA2E6PWyWXejei6HSpS/uVXD1mZbRykb1KhPb7o1a45cEMo0gcrfy06YdA13gakzuSq3
                DmDG4qQZyAjNG5n+0dPVdRv7ana0qdCixrMxEgDU93Hdx7lEsdoW8zi9di9Y8I3VeK
                lzVNJp2a0y8+xLW/+SZbPhS0o6+H4jj/dUJefY+UfIItXJFJnyUWIP8oKYscUuhUs05PbFDEWN8QiNPohl5btOwV+8JLjHVQAgbhRz1J0XwXKCsDVqeXlooM7eiN3IDxoIQi4sXckSkLlBroGXFOTIWCr5cqvMokbhU6lLK7XZFaYFNA95Wp0Mr260dorVK3kAlMuhdNsywqhr8zlcxPEWvaQAqvggHVV6lFDSbs3aVGVq+aByC2xXEHVQ0HZogKE2xWl0IgItA7RrTDI1Lp7AQsUKxaDYx0KRIJClaCiFBmumh/VSNA1zaFSuTL1BA8McRKsU6ZjXdXW0xG8KN7OfILObN9aIaFTkVICJW1FkzIXv4UDzAreZ3rFjGKoc8xyVCVZv3AvJVUFUr
                oil2erZahbBcYNeEW7nUwQVep2dQIRw7cvAgFNFC4cdYU09Mtx7QOe2pK3/BeMCx41jynoeXyV8XAJ2VguBgjlCB/wdBW9nOq9nlcYBkEgjpG6qOET2RavdZnvJIEuJ9yhlwZMDmU+N/ZNNL6K6koUi5wa0SSYA6rdtvzKbODcMBdmI9Sf0CbFW6ESfFWOvA2BtoUQ50T
                uT1P80Q6vd/iLyR+VpgIvxNiraFvladXaBCeFLLUOO51Tv4S97Yy4m6GtHoor500wvMXdq0LV/wD0ytMFR1QBxCqVqwJVXGKbzWdBVM2r43UE4/JnqY5/BIMlsRIOux6rGub1Qqhc12DR5
                jodVUfnGslDxYfNBd7WobiFMESOSr1K742ULHvPJEotASmnoF12F7tOSkdmgDop3SDoFs0mdU2yfijeiJGq3cGlV6rzOix1QhZTC0bOaoqtq06rPEJUT6pWqwXR54LQvVGX9liLYOhlH+0nXcKW1Jf5TtyPQ9FUqVC1usGNPTuFOyq2AG6OOx7+qna0WJ7J2FwJaRIU9NuXYGCqbHPGp3VgVnPEHQhCEWrKo0ndQ3rsgceRQ6m54MqPGMQlmXmiUbYL
                nSFyu6SVGFjyvFUQkjVstKa3lcYX8Hu/DeJ2Kd2TlBbqCucym7h/Gv6eR+wG6nzR+yvx8n/lhemSNxuoru9LWPIHIwfXRR/61TIgGYQzFcSDmFvt37pMYuypzVaYs1ZmVlFo3KlqvAVZ7pVaIHSZapEEk8h+qbeFG5nDzHKNSEoW48rvkjdhfGlScQfM7QJkNCsmw5idybq6yj8lPQdJTpgdDKPRJHDNHK3Mdzqnqxf
                FMuOiahDKmJV5qKw2Cwjqgzn5nkotbHyrjGKGImKhMIY+4POQFY4lrllcDqtJztgKPI+MmejijygqI6d2J1W/itdJ0UbrEgbKuKYmCUPJMLjJdkoqtnVe1XjcbKpXYBqAdOqhfWLtNkVpgtMtBzeYUPl7KuXE+ULa3cZyogNnr2CdFpVpgakqZ1KQYO3puqjnSYnZamC0zHMC1FJq0c/oo8
                yIAmLQsUPirxdR3Iu1bvzCB2I3W1GJ886Hly9FixKkqHRdhF1VwbEzG3VRUrsubDtDyI+6xYh4oZydmOuC1sc53QzE7vORpELFiOCQvLJ1QMrROi0CxYmk5PTatXL1YsNLeH24cfMrNJ7QcseUrFiU9yY5aSCtnQa1v5QRvKF4tTLXTHldqPusWIIv5DpL42C3FaSvVioRMyen0V+1bneG8gsWIkKkx1wunJDUx39bJTyhYsTRL7A1MozbPGVYsXI5iJ8QRlex3VB8PvyIWLFPlSLMEmkEfxzy7Vb1g2R1O69WKVquixO+yKqRmiNFQvWid47BYsRR7Bn0RU4Gok9lKymSHE+X+dlixGxSNS7QCNB7/NRGhOo0CxYu6OezPw8bfMn9lVqVdYAWLEUdgz0aO11hYsWIrF0f/9k=" alt="Mechanical part design" class="main-image">
                <h1 style="color:#ff6b35">2D Drawing Generation</h1>
                <p style="color:black">Scanotech Informatics gives the best 2D drawing generation. We use an advanced feature to make a 2D drawing for our clients. We always want to satisfy the customers need. We are a trustworthy scanning company in the industry area; our experts will make a creative 2D design for our clients. We give a good quality 2D drawing to our clients. By using an advanced and new feature, we make an improvised way of making 2D drawings. We use the best equipment which will give the customer a unique experience. We provide the exact shape and size of the 2D drawing which the client will expect. We never use any other thing that will decrease our work quality to build good trust among the people. The process we are used to making an excellent 2D drawing is unique and new so that it will give you the result of what you want from your 2D drawing.</p>
            </div>
            <div class="sidebar-right">
                <nav class="side-nav">
                    <ul>
                        <li><a href="#">3D Scanning</a></li>
                        <li><a href="#">Reverse Engineering</a></li>
                        <li class="active"><a href="#">2D Drawing Generation</a></li>
                        <li><a href="#">3D Printing/Rapid Prototyping</a></li>
                        <li><a href="#">CMM Inspection</a></li>
                        <li><a href="#">Laser Scanning</a></li>
                        <li><a href="#">Surface Deviation Analysis</a></li>
                        <li><a href="#">Spare Part Design Development</a></li>
                        <li><a href="#">Laser Tracker Service</a></li>
                    </ul>
                </nav>
                <div class="contact-box">
                     <div class="contact-icon-background">
                        <span class="contact-icon">📞</span>
                    </div>
                    <h3>How Can We Help You?</h3>
                    <p>We can help you providing end-to-end solution as per your requirements. Consult our experts to know more.</p>
                    <div class="contact-details">
                        <p>📞 +91-8010 28 8021</p>
                        <p>📧 info@scanotech-informatics.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
        </div>
    </div>
</div>
<style>
    /* General body styling */

/* Container for the page content */
.container {
    max-width: 1300px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
}

/* Flexbox container for main content */
.main-content {
    display: flex;
    gap: 20px;
}

/* Left content area */
.content-left {
    flex: 2; /* Takes up 2/3 of the space */
}

.main-image {
    width: 100%;
    height: 400px;
    margin-bottom: 20px;
}

.content-left h1 {
    font-size: 2em;
    color: white;
}

.content-left p {
    line-height: 1.6;
    text-align: justify;
}

/* Right sidebar area */
.sidebar-right {
    flex: 1; /* Takes up 1/3 of the space */
}

/* Side navigation menu */
.side-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #ddd;
}

.side-nav li {
    border-bottom: 1px solid #ddd;
}

.side-nav li:last-child {
    border-bottom: none;
}

.side-nav a {
    display: block;
    padding: 15px 20px;
    text-decoration: none;
    color: black;
    font-size: 0.9em;
    font-weight: 500;
}

.side-nav a:hover {
    background-color: #ff6b35;
    color:white;
}

/* Active navigation item */
.side-nav li.active {
    background-color: #4CAF50; /* Green background */
}

.side-nav li.active a {
    color: white; /* White text */
}

/* Contact box styling */
.contact-box {
    background-color: #ff6b35;
    color:white;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    border: 1px solid #ddd;
}

.contact-icon-background {
    background-color: #e7f3fe;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.contact-icon {
    font-size: 24px;
    color: #3b82f6;
}

.contact-box h3 {
    margin-bottom: 15px;
}

.contact-details {
    margin-top: 20px;
    text-align: center
}

.contact-details p {
    margin: 5px 0;
}


/* Responsive Design: Stacks columns on smaller screens */
@media (max-width: 768px) {
    .main-content {
        flex-direction: column;
    }

    .sidebar-right {
        margin-top: 20px;
    }
}
</style>
<!-- Modal -->
<div class="modal fade" id="enquery-pop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="contact-form-area pt-4">
                <div class="midd-content section-title mb-3">
                    <h3>Send us a message</h3>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"
                            aria-hidden="true"></i></button>
                </div>
                <form enctype="multipart/form-data" method="POST" id="contactUsForm" action="javascript:">
                    @csrf
                    <input type="hidden" name="country_code" value="" id="country_code_id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="First name" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Last name" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email ID"
                                    required>
                                <div class="invalid-feedback">Please provide a valid Email.</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone_number">Phone</label>
                                <input type="tel" pattern="^[1-9][0-9]*$" class="form-control" id="phone_number"
                                    name="phone_number" required>
                                <div class="invalid-feedback">Please provide a valid phone number.</div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="1000"
                                    minlength="30" required rows="3"></textarea>
                                <div class="invalid-feedback">Please provide a message.</div>
                            </div>
                        </div>
                        <x-input-with-label-element id="captcha" type="text" label="Captcha" name="captcha" required
                            placeholder="Captcha"></x-input-with-label-element>
                        <div class="col-md-8 col-sm-12 mb-3">
                            <div class="row">
                                <div class="col-md-6 pt-4">
                                    <img src="{{ captcha_src() }}" class="img-thumbnail h-100" id="captcha_img_id">
                                </div>
                                <div class="col-md-6 pt-4 view-button">
                                    <button type="button" class="btn default-btn btn-block font-weight-bold"
                                        onclick="refreshCapthca('captcha_img_id','captcha')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                            <path
                                                d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                            <path fill-rule="evenodd"
                                                d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                                        </svg>
                                        Refresh
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="" id="tnc" required>
                                <label class="form-check-label" for="tnc">Agree to terms and
                                    conditions</label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                        </div>
                    </div>
                    <div class="view-button">
                        <button class="default-btn" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
     .contact-form-area button[data-bs-dismiss="modal"],
    .service-page .destinations-block a {
        position: absolute;
        bottom: 0;
        top: calc(100% - 45px);
        right: 0;
        left: calc(100% - 45px);
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        color: #fff;
        background-color: rgb(var(--red-color));
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        z-index: 1;
    }
    .offerings-content-inner a {
        padding: 8px 15px;
        border-radius: 25px;
        background-color: var(--brown-color);
        color: #fff;
    }
    .offerings-content-inner a:hover{
        color:#fff;
    }
    .contact-form-area button[data-bs-dismiss="modal"] {
        position: absolute;
        top: 10px;
        right: 10px !important;
        left: auto;
        color:red;
    }
    .contact-form-area.pt-4 {
    padding: 20px;
}
    </style>
@endsection

    @section('script')
<script>
    $("#contactUsForm").on("submit", function () {
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        full_number = Number(full_number);
        //$("#phone_number").val(full_number);
        typeof (full_number);
        $("#country_code_id").val("+" + phone_number.getSelectedCountryData().dialCode);
        var form = new FormData(this);

        $("#submitButton").attr("disable", true);
        $.ajax({
            type: 'post',
            url: '{{ route('saveContactUsDetails') }}',
            data: form,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status) {
                    successMessage(response.message, true);
                } else {
                    errorMessage(response.message ?? "Something went wrong.");
                    $("#submitButton").attr("disable", false);
                    refreshCapthca('captcha_img_id', 'captcha');
                }
            },
            failure: function (response) {
                errorMessage(response.message ?? "Something went wrong.");
                $("#submitButton").attr("disable", false);
                refreshCapthca('captcha_img_id', 'captcha');
            },
            error: function (response) {
                errorMessage(response.message ?? "Something went wrong.");
                $("#submitButton").attr("disable", false);
                refreshCapthca('captcha_img_id', 'captcha');
            }
        });
    });
    var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
        separateDialCode: true,
        preferredCountries: ["in"],
        hiddenInput: "full",
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });
</script>
@endsection