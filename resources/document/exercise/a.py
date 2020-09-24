arr = []
m = int(input())
n = int(input())
for i in range(0, m):
    arr.append([])
    x = list(map(int, input().split()))
    arr[i].extend(x)
def findPasses(arr):
	passes = []
	for i in range(1, len(arr)-1):
		for j in range(1,len(arr[i])-1):
			if arr[i][j] < arr[i+1][j] and arr[i][j] < arr[i-1][j] and arr[i][j] > arr[i][j-1] and arr[i][j] > arr[i][j+1]:
				passes.append((i, j))
	return passes
passes = findPasses(arr)
print(passes[0][0])