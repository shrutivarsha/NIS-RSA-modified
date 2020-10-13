m=10**9+7
def bitmask(mask,tid):
    if mask == 2**n - 1:
        return 1
    if tid==101:
        return 0
    if dp[mask][tid]!=-1:
        return dp[mask][tid]
    ans=bitmask(mask,tid+1) 
    for h in ts[tid]:
        #print(h)
        if mask & (1<<h):
            continue
        ans=((ans%m)+(bitmask((mask|(1<<h)),tid+1))%m)%m
        #print(ans)
    dp[mask][tid]=ans
    return ans

for _ in range(int(input())):
    n=int(input())
    dp=[[-1]*102 for o in range(1024)]
    ts=[[] for i in range(101)]
    for j in range(n):
        l=list(map(int,input().split()))
        for k in l:
            ts[k].append(j)
    #print(ts)
    print(bitmask(0,0))
